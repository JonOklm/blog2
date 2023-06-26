<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="app_test")
     */
    #[Route('/test', name: 'app_test')]
    public function index(): Response
    {
        $nom = "Boussaid";

        $personne = [
            "nom" => "Toto",
            "prenom" => "Tata"
        ];

        $personnes = [
                "personne1" => [
                    "nom" => "Lesage",
                    "prenom" => "Kevin"
                ],
                "personne2" => [
                    "nom" => "Fofana",
                    "prenom" => "Mouhamadou"
                ],
                "personne3" =>[
                    "nom" => "Agonnoude",
                    "prenom" => "Roger"
                ]
            ];

        return $this->render('layout.html.twig', [
            "toto" => $nom,
            "personne" => $personne,
            "personnes" => $personnes
        ]);
    }
}
