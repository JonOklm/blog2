<?php

namespace App\Controller;

use App\Entity\Article;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ManagerRegistry $doctrine): Response
    {

       $article = $doctrine->getRepository(Article::class)->findOneBy([],["dateDeCreation" => "DESC"]);

    //    dd($article);

        return $this->render('home/index.html.twig', [
            "article" => $article
        ]);
    }
}
