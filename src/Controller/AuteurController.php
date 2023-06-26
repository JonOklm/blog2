<?php

namespace App\Controller;

use App\Entity\Auteur;
use App\Form\AuteurType;
use App\Repository\AuteurRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AuteurController extends AbstractController
{
    #[Route('/auteur_ajout', name: 'app_auteur_ajout')]
    public function ajout(Request $request, AuteurRepository $repo): Response
    {
        $auteur = new Auteur();

        $form = $this->createForm(AuteurType::class, $auteur);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            // la methode save est dans le repositorie, elle permet de faire un persist et flush à la fois
            $repo->save($auteur,1);

            return $this->redirectToRoute("app_auteurs");
        }
        
        return $this->render('auteur/formAuteur.html.twig', [
            'formAuteur' => $form->createView()
        ]);
    }


    #[Route('/auteurs', name: 'app_auteurs')]
    public function lesAuteurs(AuteurRepository $repo)
    {
        $auteurs = $repo->findAll();

        return $this->render('auteur/lesAuteurs.html.twig', [
            'auteurs' => $auteurs
        ]);
    }


    #[Route('/auteur_{id<\d+>}', name: 'app_auteur')]
    public function unAuteur($id, AuteurRepository $repo)
    {
        $auteur = $repo->find($id);

        return $this->render("auteur/unAuteur.html.twig", [
            'auteur' => $auteur
        ]);
    }


    #[Route('/auteur_update_{id<\d+>}', name: 'app_auteur_update')]
    public function update($id, Request $request, AuteurRepository $repo): Response
    {
        $auteur = $repo->find($id);

        $form = $this->createForm(AuteurType::class, $auteur);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            // la methode save est dans le repository, elle permet de faire un persist et flush à la fois
            $repo->save($auteur,1);

            return $this->redirectToRoute("app_auteurs");
        }
        
        return $this->render('auteur/formAuteur.html.twig', [
            'formAuteur' => $form->createView()
        ]);
    }


    #[Route('/auteur_delete_{id<\d+>}', name: 'app_auteur_delete')]
    public function delete($id, AuteurRepository $repo)
    {
        // on recupere l'auteur à supprimer grâce à l'id qui se trouve dans l'url
        $auteur = $repo->find($id);

        // on supprime l'auteur en passant par la methode remove() qui se trouve dans le repository qui permet de faire un remove() puis flush en même temps
        $repo->remove($auteur, 1);

        // une fois la suppression terminée on redirige vers la page des auteurs
        return $this->redirectToRoute('app_auteurs');

    }



}
