<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class CategorieController extends AbstractController
{
    #[Route('/categorie', name: 'app_categorie_ajout')]
    public function ajout(Request $request, CategorieRepository $repo, ManagerRegistry $doctrine, SluggerInterface $slugger): Response
    {
        $categorie = new Categorie();

        $categories = $doctrine->getRepository(Categorie::class)->findAll();

        $form = $this->createForm(CategorieType::class, $categorie);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $categorie->setSlug( $slugger->slug( $categorie->getNom() ) );

            $repo->save($categorie, 1);

            return $this->redirectToRoute("app_articles");
        }


        return $this->render('categorie/categorieForm.html.twig', [
            'formCategorie' => $form->createView(),
            'categories' => $categories
        ]);
    }
    #[Route('/categorie_update{slug}', name: 'app_categorie_update')]
        public function modifier($slug, Request $request, CategorieRepository $repo, SluggerInterface $slugger): Response
        {
            $categorie = $repo->findOneBy(['slug' => $slug]);
    
            $form = $this->createForm(CategorieType::class, $categorie);
    
            $form->handleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid())
            {
                $categorie->setSlug( $slugger->slug( $categorie->getNom() ) );
    
                $repo->save($categorie, 1);
    
                return $this->redirectToRoute("app_articles");
            }
    
    
            return $this->render('categorie/categorieForm.html.twig', [
                'formCategorie' => $form->createView(),
            ]);
        }



        #[Route('/categorie_/{slug}', name: 'app_categorie_article')]
        public function articlesCategorie($slug, CategorieRepository $repoCat)
        {
            $categorie = $repoCat->findOneBy(['slug' => $slug]);
            $articles = $categorie->getArticles();

            $categories = $repoCat->findAll();

            return $this->render('article/lesArticles.html.twig',[
                'categories' => $categories,
                'articles' => $articles
            ]);
        }



}

