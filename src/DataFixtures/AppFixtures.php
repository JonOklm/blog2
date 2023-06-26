<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Article;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        
        for ($i=1; $i < 11; $i++) { 
            $article = new Article();
            $article->setTitre("titre$i")
                    ->setContenu("$i Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sunt, natus veniam nemo praesentium incidunt voluptates molestias ratione consequatur, earum aut adipisci velit, laboriosam dolor saepe ipsam vitae quos nobis?")
                    ->setDateDeCreation(new DateTime("now"));
            
            $manager->persist($article);
        }

        $manager->flush();
    }
}
