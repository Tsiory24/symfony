<?php

namespace Container0F6Jo2C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProjectApiControllerfindByIdService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.mlTFQ4a.App\Controller\API\ProjectApiController::findById()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mlTFQ4a.App\\Controller\\API\\ProjectApiController::findById()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'project' => ['privates', '.errored..service_locator.mlTFQ4a.App\\Entity\\Project', NULL, 'Cannot autowire service ".service_locator.mlTFQ4a": it needs an instance of "App\\Entity\\Project" but this type has been excluded in "config/services.yaml".'],
        ], [
            'project' => 'App\\Entity\\Project',
        ]))->withContext('App\\Controller\\API\\ProjectApiController::findById()', $container);
    }
}