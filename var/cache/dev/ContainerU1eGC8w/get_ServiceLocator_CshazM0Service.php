<?php

namespace ContainerU1eGC8w;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CshazM0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CshazM0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CshazM0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'form.factory' => ['privates', 'form.factory', 'getForm_FactoryService', true],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'twig' => ['privates', 'twig', 'getTwigService', true],
        ], [
            'form.factory' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'twig' => '?',
        ]);
    }
}
