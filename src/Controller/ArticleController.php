<?php

namespace App\Controller;

use DateTime;
use App\Entity\Article;
use App\Entity\Commentaire;
use App\Form\ArticleType;
use App\Form\CommentaireType;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class ArticleController extends AbstractController
{
    #[Route('/articles', name: 'app_articles')]
    public function lesArticles(ManagerRegistry $doctrine, CategorieRepository $repoCat): Response
    {
        // on récupere tous les articles depuis la bdd en passant par le repository lié à l'entité Article qui est (ArticleRepository) et on utilise la methode findAll() pour tout selectionner
        $articles = $doctrine->getRepository(Article::class)->findAll();

        $categories = $repoCat->findAll();

        // dd() permet de faire un dump et die à la fois (pour verifier e contenu d'une variable et arreter l'exécution ici)
        //dd($articles);

        return $this->render('article/lesArticles.html.twig', [
            'articles' => $articles,
            'categories' => $categories
        ]);
    }

    #[Route('/article_{id<\d+>}' , name: 'app_fiche_article')]
    public function unArticle($id, ManagerRegistry $doctrine, Request $request) //$id recupére automatiquement l'id qui est dans la route (url)
    {
        // on cherche à recuperer l'article ayant l'id passé dans la route (url)
        $article = $doctrine->getRepository(Article::class)->find($id);

        $commentaire = new Commentaire();

        $form = $this->createForm(CommentaireType::class, $commentaire);

        $form->handleRequest($request);

        if( $form->isSubmitted() && $form->isValid())
        {
            $commentaire->setDateDeCreation(new DateTime("now"));
            $commentaire->setArticle($article);

            $manager = $doctrine->getManager();
            $manager->persist($commentaire);
            $manager->flush();

            return $this->redirectToRoute("app_fiche_article", ["id" => $id]);
        }

        //on recupere le ou les commentaires de l'article en cours grâce à la relation qu'il ya entre Article et Commentaire
        $commentaires = $article->getCommentaires();

        return $this->render("article/unArticle.html.twig", [
            "article" => $article,
            "formCommentaire" => $form->createView(),
            "commentaires" => $commentaires
        ]);
    }

    #[Route('/article_ajout', name: "app_article_ajout")]
    public function ajout(Request $request, ManagerRegistry $doctrine, SluggerInterface $slugger)
    {
        // on vérifie si l'utilisateur est connécté ou pas
        if( !$this->isGranted('IS_AUTHENTICATED_FULLY'))
        {
            $this->addFlash("error", "veuillez vous connecter afin de consulter cette page !");

            return $this->redirectToRoute('app_login');
        }

        // l'utilisateur est connecté ou pas
        if(!$this->isGranted('ROLE_ADMIN'))
        {
            $this->addFlash("error", " vous n'êtes pas autoriser à créer un article !");

            return $this->redirectToRoute('app_home');
        }


        $article = new Article();

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if( $form->isSubmitted() && $form->isValid() )
        {
            $article->setDateDeCreation(new DateTime("now"));

            //on recupere l'image du formulaire
            $file = $form->get('imageForm')->getData();

            if($file)// on traite l'image uniquement s'il y a une image d'ajouté dans le formulaire sinon on ne fait rien
            {
                // on renomme l'image en mettant le titre sous forme de slug en ajoutant un uniqid puis l'extension de l'image 
                // slug : transforme une chaine de caractére ex: "mot clé" => "mot-cle"
                $fileName = $slugger->slug($article->getTitre()) . uniqid() . '.' . $file->guessExtension();
    
                try{
                    // on deplace l'image dans le dossier parametré dans config/service.yaml avec le nom crée ($fileName)
                    $file->move($this->getParameter('article_image'), $fileName);
                }catch(FileException $e){
                    // gérer les exceptions en cas d'erreur
                }
                // on affecte le nom de l'image à l'article que l'on va enregistrer en bdd
                $article->setImage($fileName);
            }

            $manager = $doctrine->getManager();
            $manager->persist($article);
            $manager->flush();

            $this->addFlash("success", "l'article a bien été ajouté !");

            return $this->redirectToRoute("app_articles");
        }

        return $this->render("article/articleForm.html.twig" , [
            "formArticle" => $form->createView()
        ]);
    }



    #[Route('/article_modifier_{id<\d+>}', name: "app_article_modifier")]
    public function modifier($id, ManagerRegistry $doctrine, Request $request
    , SluggerInterface $slugger)
    {
        $article = $doctrine->getRepository(Article::class)->find($id);

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if( $form->isSubmitted() && $form->isValid() )
        {
            $article->setDateDeModification(new DateTime("now"));

            //on recupere l'image du formulaire
            $file = $form->get('imageForm')->getData();

            if($file)// on traite l'image uniquement s'il y a une image d'ajouté dans le formulaire sinon on ne fait rien
            {
                // on renomme l'image en mettant le titre sous forme de slug en ajoutant un uniqid puis l'extension de l'image 
                // slug : transforme une chaine de caractére ex: "mot clé" => "mot-cle"
                $fileName = $slugger->slug($article->getTitre()) . uniqid() . '.' . $file->guessExtension();
    
                try{
                    // on deplace l'image dans le dossier parametré dans config/service.yaml avec le nom crée ($fileName)
                    $file->move($this->getParameter('article_image'), $fileName);
                }catch(FileException $e){
                    // gérer les exceptions en cas d'erreur
                }
                // on affecte le nom de l'image à l'article que l'on va enregistrer en bdd
                $article->setImage($fileName);
            }

            $manager = $doctrine->getManager();
            $manager->persist($article);
            $manager->flush();

            

            return $this->redirectToRoute("app_articles");
        }

        return $this->render("article/articleForm.html.twig" , [
            "formArticle" => $form->createView()
        ]);
    }


    #[Route('article_supprimer_{id<\d+>}', name: 'app_article_supprimer')]
    public function supprimer($id, ArticleRepository $repo)
    {
        $article = $repo->find($id);

        $repo->remove($article,1);
        
        return $this->redirectToRoute("app_articles");

    }







}
