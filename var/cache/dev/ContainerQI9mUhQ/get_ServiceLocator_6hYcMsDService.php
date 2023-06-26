<?php

namespace ContainerQI9mUhQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6hYcMsDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6hYcMsD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6hYcMsD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repoCat' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
        ], [
            'repoCat' => 'App\\Repository\\CategorieRepository',
        ]);
    }
}
