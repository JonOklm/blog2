<?php

namespace ContainerOso0IKx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ESajdWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ESajd_W' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ESajd_W'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'doctrine' => '?',
            'slugger' => '?',
        ]);
    }
}
