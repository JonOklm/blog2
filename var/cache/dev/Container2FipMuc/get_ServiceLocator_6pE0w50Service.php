<?php

namespace Container2FipMuc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6pE0w50Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6pE0w50' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6pE0w50'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ArticleController::ajout' => ['privates', '.service_locator.ESajd_W', 'get_ServiceLocator_ESajdWService', true],
            'App\\Controller\\ArticleController::lesArticles' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\ArticleController::modifier' => ['privates', '.service_locator.ESajd_W', 'get_ServiceLocator_ESajdWService', true],
            'App\\Controller\\ArticleController::supprimer' => ['privates', '.service_locator.fpD7nIw', 'get_ServiceLocator_FpD7nIwService', true],
            'App\\Controller\\ArticleController::unArticle' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\AuteurController::ajout' => ['privates', '.service_locator.i0I2rVf', 'get_ServiceLocator_I0I2rVfService', true],
            'App\\Controller\\AuteurController::delete' => ['privates', '.service_locator.i0I2rVf', 'get_ServiceLocator_I0I2rVfService', true],
            'App\\Controller\\AuteurController::lesAuteurs' => ['privates', '.service_locator.i0I2rVf', 'get_ServiceLocator_I0I2rVfService', true],
            'App\\Controller\\AuteurController::unAuteur' => ['privates', '.service_locator.i0I2rVf', 'get_ServiceLocator_I0I2rVfService', true],
            'App\\Controller\\AuteurController::update' => ['privates', '.service_locator.i0I2rVf', 'get_ServiceLocator_I0I2rVfService', true],
            'App\\Controller\\CategorieController::ajout' => ['privates', '.service_locator.Sm2zpFN', 'get_ServiceLocator_Sm2zpFNService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\ArticleController:ajout' => ['privates', '.service_locator.ESajd_W', 'get_ServiceLocator_ESajdWService', true],
            'App\\Controller\\ArticleController:lesArticles' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\ArticleController:modifier' => ['privates', '.service_locator.ESajd_W', 'get_ServiceLocator_ESajdWService', true],
            'App\\Controller\\ArticleController:supprimer' => ['privates', '.service_locator.fpD7nIw', 'get_ServiceLocator_FpD7nIwService', true],
            'App\\Controller\\ArticleController:unArticle' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\AuteurController:ajout' => ['privates', '.service_locator.i0I2rVf', 'get_ServiceLocator_I0I2rVfService', true],
            'App\\Controller\\AuteurController:delete' => ['privates', '.service_locator.i0I2rVf', 'get_ServiceLocator_I0I2rVfService', true],
            'App\\Controller\\AuteurController:lesAuteurs' => ['privates', '.service_locator.i0I2rVf', 'get_ServiceLocator_I0I2rVfService', true],
            'App\\Controller\\AuteurController:unAuteur' => ['privates', '.service_locator.i0I2rVf', 'get_ServiceLocator_I0I2rVfService', true],
            'App\\Controller\\AuteurController:update' => ['privates', '.service_locator.i0I2rVf', 'get_ServiceLocator_I0I2rVfService', true],
            'App\\Controller\\CategorieController:ajout' => ['privates', '.service_locator.Sm2zpFN', 'get_ServiceLocator_Sm2zpFNService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
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
            'App\\Controller\\HomeController::index' => '?',
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
            'App\\Controller\\HomeController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
