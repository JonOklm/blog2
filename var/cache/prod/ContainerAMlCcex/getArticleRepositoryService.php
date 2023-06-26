<?php

namespace ContainerAMlCcex;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticleRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ArticleRepository' shared autowired service.
     *
     * @return \App\Repository\ArticleRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ArticleRepository'] = new \App\Repository\ArticleRepository(($container->services['doctrine'] ?? $container->load('getDoctrineService')));
    }
}
