<?php

namespace Container0F6Jo2C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaskRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\TaskRepository' shared autowired service.
     *
     * @return \App\Repository\TaskRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['knp_paginator'] ?? $container->load('getKnpPaginatorService'));

        if (isset($container->privates['App\\Repository\\TaskRepository'])) {
            return $container->privates['App\\Repository\\TaskRepository'];
        }

        return $container->privates['App\\Repository\\TaskRepository'] = new \App\Repository\TaskRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)), $a);
    }
}
