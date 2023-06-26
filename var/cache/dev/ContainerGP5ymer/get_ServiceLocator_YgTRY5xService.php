<?php

namespace ContainerGP5ymer;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YgTRY5xService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ygTRY5x' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ygTRY5x'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ArticleController::ajout' => ['privates', '.service_locator.ESajd_W', 'get_ServiceLocator_ESajdWService', true],
            'App\\Controller\\ArticleController::lesArticles' => ['privates', '.service_locator.IOsxuAU', 'get_ServiceLocator_IOsxuAUService', true],
            'App\\Controller\\ArticleController::modifier' => ['privates', '.service_locator.ESajd_W', 'get_ServiceLocator_ESajdWService', true],
            'App\\Controller\\ArticleController::supprimer' => ['privates', '.service_locator.fpD7nIw', 'get_ServiceLocator_FpD7nIwService', true],
            'App\\Controller\\ArticleController::unArticle' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\AuteurController::ajout' => ['privates', '.service_locator.i0I2rVf', 'get_ServiceLocator_I0I2rVfService', true],
            'App\\Controller\\AuteurController::delete' => ['privates', '.service_locator.i0I2rVf', 'get_ServiceLocator_I0I2rVfService', true],
            'App\\Controller\\AuteurController::lesAuteurs' => ['privates', '.service_locator.i0I2rVf', 'get_ServiceLocator_I0I2rVfService', true],
            'App\\Controller\\AuteurController::unAuteur' => ['privates', '.service_locator.i0I2rVf', 'get_ServiceLocator_I0I2rVfService', true],
            'App\\Controller\\AuteurController::update' => ['privates', '.service_locator.i0I2rVf', 'get_ServiceLocator_I0I2rVfService', true],
            'App\\Controller\\CategorieController::ajout' => ['privates', '.service_locator.xmzUWmn', 'get_ServiceLocator_XmzUWmnService', true],
            'App\\Controller\\CategorieController::articlesCategorie' => ['privates', '.service_locator.6hYcMsD', 'get_ServiceLocator_6hYcMsDService', true],
            'App\\Controller\\CategorieController::modifier' => ['privates', '.service_locator.daCyYuT', 'get_ServiceLocator_DaCyYuTService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\SecurityController::passerEnAdmin' => ['privates', '.service_locator.bYqs9Eo', 'get_ServiceLocator_BYqs9EoService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\ArticleController:ajout' => ['privates', '.service_locator.ESajd_W', 'get_ServiceLocator_ESajdWService', true],
            'App\\Controller\\ArticleController:lesArticles' => ['privates', '.service_locator.IOsxuAU', 'get_ServiceLocator_IOsxuAUService', true],
            'App\\Controller\\ArticleController:modifier' => ['privates', '.service_locator.ESajd_W', 'get_ServiceLocator_ESajdWService', true],
            'App\\Controller\\ArticleController:supprimer' => ['privates', '.service_locator.fpD7nIw', 'get_ServiceLocator_FpD7nIwService', true],
            'App\\Controller\\ArticleController:unArticle' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\AuteurController:ajout' => ['privates', '.service_locator.i0I2rVf', 'get_ServiceLocator_I0I2rVfService', true],
            'App\\Controller\\AuteurController:delete' => ['privates', '.service_locator.i0I2rVf', 'get_ServiceLocator_I0I2rVfService', true],
            'App\\Controller\\AuteurController:lesAuteurs' => ['privates', '.service_locator.i0I2rVf', 'get_ServiceLocator_I0I2rVfService', true],
            'App\\Controller\\AuteurController:unAuteur' => ['privates', '.service_locator.i0I2rVf', 'get_ServiceLocator_I0I2rVfService', true],
            'App\\Controller\\AuteurController:update' => ['privates', '.service_locator.i0I2rVf', 'get_ServiceLocator_I0I2rVfService', true],
            'App\\Controller\\CategorieController:ajout' => ['privates', '.service_locator.xmzUWmn', 'get_ServiceLocator_XmzUWmnService', true],
            'App\\Controller\\CategorieController:articlesCategorie' => ['privates', '.service_locator.6hYcMsD', 'get_ServiceLocator_6hYcMsDService', true],
            'App\\Controller\\CategorieController:modifier' => ['privates', '.service_locator.daCyYuT', 'get_ServiceLocator_DaCyYuTService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\SecurityController:passerEnAdmin' => ['privates', '.service_locator.bYqs9Eo', 'get_ServiceLocator_BYqs9EoService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\ArticleController::ajout' => '?',
            'App\\Controller\\ArticleController::lesArticles' => '?',
            'App\\Controller\\ArticleController::modifier' => '?',
            'App\\Controller\\ArticleController::supprimer' => '?',
            'App\\Controller\\ArticleController::unArticle' => '?',
            'App\\Controller\\AuteurController::ajout' => '?',
            'App\\Controller\\AuteurController::delete' => '?',
            'App\\Controller\\AuteurController::lesAuteurs' => '?',
            'App\\Controller\\AuteurController::unAuteur' => '?',
            'App\\Controller\\AuteurController::update' => '?',
            'App\\Controller\\CategorieController::ajout' => '?',
            'App\\Controller\\CategorieController::articlesCategorie' => '?',
            'App\\Controller\\CategorieController::modifier' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::passerEnAdmin' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ArticleController:ajout' => '?',
            'App\\Controller\\ArticleController:lesArticles' => '?',
            'App\\Controller\\ArticleController:modifier' => '?',
            'App\\Controller\\ArticleController:supprimer' => '?',
            'App\\Controller\\ArticleController:unArticle' => '?',
            'App\\Controller\\AuteurController:ajout' => '?',
            'App\\Controller\\AuteurController:delete' => '?',
            'App\\Controller\\AuteurController:lesAuteurs' => '?',
            'App\\Controller\\AuteurController:unAuteur' => '?',
            'App\\Controller\\AuteurController:update' => '?',
            'App\\Controller\\CategorieController:ajout' => '?',
            'App\\Controller\\CategorieController:articlesCategorie' => '?',
            'App\\Controller\\CategorieController:modifier' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:passerEnAdmin' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
