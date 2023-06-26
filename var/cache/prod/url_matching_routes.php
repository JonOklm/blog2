<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/articles' => [[['_route' => 'app_articles', '_controller' => 'App\\Controller\\ArticleController::lesArticles'], null, null, null, false, false, null]],
        '/admin/article_ajout' => [[['_route' => 'app_article_ajout', '_controller' => 'App\\Controller\\ArticleController::ajout'], null, null, null, false, false, null]],
        '/auteur_ajout' => [[['_route' => 'app_auteur_ajout', '_controller' => 'App\\Controller\\AuteurController::ajout'], null, null, null, false, false, null]],
        '/auteurs' => [[['_route' => 'app_auteurs', '_controller' => 'App\\Controller\\AuteurController::lesAuteurs'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie_ajout', '_controller' => 'App\\Controller\\CategorieController::ajout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/cgv' => [[['_route' => 'cgv', 'template' => 'statique/cgv.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', 'template' => 'statique/contact.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null]],
        '/devenirBlogueur' => [[['_route' => 'devenir_blogueur', 'template' => 'statique/devenirBlogueur.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null]],
        '/joinTeam' => [[['_route' => 'join_team', 'template' => 'statique/joinTeam.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null]],
        '/quiSommesNous' => [[['_route' => 'qui_sommes_nous', 'template' => 'statique/quiSommesNous.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null]],
        '/values' => [[['_route' => 'values', 'template' => 'statique/values.html.twig', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|rticle_(?'
                        .'|(\\d+)(*:27)'
                        .'|modifier_(\\d+)(*:48)'
                        .'|supprimer_(\\d+)(*:70)'
                    .')'
                    .'|uteur_(?'
                        .'|(\\d+)(*:92)'
                        .'|update_(\\d+)(*:111)'
                        .'|delete_(\\d+)(*:131)'
                    .')'
                .')'
                .'|/categorie_(?'
                    .'|update([^/]++)(*:169)'
                    .'|/([^/]++)(*:186)'
                .')'
                .'|/passer\\-en\\-admin_(\\d+)(*:219)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'app_fiche_article', '_controller' => 'App\\Controller\\ArticleController::unArticle'], ['id'], null, null, false, true, null]],
        48 => [[['_route' => 'app_article_modifier', '_controller' => 'App\\Controller\\ArticleController::modifier'], ['id'], null, null, false, true, null]],
        70 => [[['_route' => 'app_article_supprimer', '_controller' => 'App\\Controller\\ArticleController::supprimer'], ['id'], null, null, false, true, null]],
        92 => [[['_route' => 'app_auteur', '_controller' => 'App\\Controller\\AuteurController::unAuteur'], ['id'], null, null, false, true, null]],
        111 => [[['_route' => 'app_auteur_update', '_controller' => 'App\\Controller\\AuteurController::update'], ['id'], null, null, false, true, null]],
        131 => [[['_route' => 'app_auteur_delete', '_controller' => 'App\\Controller\\AuteurController::delete'], ['id'], null, null, false, true, null]],
        169 => [[['_route' => 'app_categorie_update', '_controller' => 'App\\Controller\\CategorieController::modifier'], ['slug'], null, null, false, true, null]],
        186 => [[['_route' => 'app_categorie_article', '_controller' => 'App\\Controller\\CategorieController::articlesCategorie'], ['slug'], null, null, false, true, null]],
        219 => [
            [['_route' => 'app_passer_en_admin', '_controller' => 'App\\Controller\\SecurityController::passerEnAdmin'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
