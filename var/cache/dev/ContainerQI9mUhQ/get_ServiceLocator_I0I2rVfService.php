<?php

namespace ContainerQI9mUhQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I0I2rVfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.i0I2rVf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.i0I2rVf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\AuteurRepository', 'getAuteurRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\AuteurRepository',
        ]);
    }
}
