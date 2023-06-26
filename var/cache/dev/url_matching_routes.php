<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/articles' => [[['_route' => 'app_articles', '_controller' => 'App\\Controller\\ArticleController::lesArticles'], null, null, null, false, false, null]],
        '/article_ajout' => [[['_route' => 'app_article_ajout', '_controller' => 'App\\Controller\\ArticleController::ajout'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|rticle_(?'
                        .'|(\\d+)(*:189)'
                        .'|modifier_(\\d+)(*:211)'
                        .'|supprimer_(\\d+)(*:234)'
                    .')'
                    .'|uteur_(?'
                        .'|(\\d+)(*:257)'
                        .'|update_(\\d+)(*:277)'
                        .'|delete_(\\d+)(*:297)'
                    .')'
                .')'
                .'|/c(?'
                    .'|ategorie_(?'
                        .'|update([^/]++)(*:338)'
                        .'|/([^/]++)(*:355)'
                    .')'
                    .'|onfirmation\\-de\\-compte/([^/]++)(*:396)'
                .')'
                .'|/passer\\-en\\-admin_(\\d+)(*:429)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'app_fiche_article', '_controller' => 'App\\Controller\\ArticleController::unArticle'], ['id'], null, null, false, true, null]],
        211 => [[['_route' => 'app_article_modifier', '_controller' => 'App\\Controller\\ArticleController::modifier'], ['id'], null, null, false, true, null]],
        234 => [[['_route' => 'app_article_supprimer', '_controller' => 'App\\Controller\\ArticleController::supprimer'], ['id'], null, null, false, true, null]],
        257 => [[['_route' => 'app_auteur', '_controller' => 'App\\Controller\\AuteurController::unAuteur'], ['id'], null, null, false, true, null]],
        277 => [[['_route' => 'app_auteur_update', '_controller' => 'App\\Controller\\AuteurController::update'], ['id'], null, null, false, true, null]],
        297 => [[['_route' => 'app_auteur_delete', '_controller' => 'App\\Controller\\AuteurController::delete'], ['id'], null, null, false, true, null]],
        338 => [[['_route' => 'app_categorie_update', '_controller' => 'App\\Controller\\CategorieController::modifier'], ['slug'], null, null, false, true, null]],
        355 => [[['_route' => 'app_categorie_article', '_controller' => 'App\\Controller\\CategorieController::articlesCategorie'], ['slug'], null, null, false, true, null]],
        396 => [[['_route' => 'app_activation', '_controller' => 'App\\Controller\\SecurityController::confirmationCompte'], ['token'], null, null, false, true, null]],
        429 => [
            [['_route' => 'app_passer_en_admin', '_controller' => 'App\\Controller\\SecurityController::passerEnAdmin'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
