<?php

namespace Container0F6Jo2C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProjectApiControllerdeleteService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.2QQSS.I.App\Controller\API\ProjectApiController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2QQSS.I.App\\Controller\\API\\ProjectApiController::delete()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'deleteService' => ['privates', 'App\\Service\\DeleteService', 'getDeleteServiceService', true],
            'repository' => ['privates', 'App\\Repository\\ProjectRepository', 'getProjectRepositoryService', true],
        ], [
            'deleteService' => 'App\\Service\\DeleteService',
            'repository' => 'App\\Repository\\ProjectRepository',
        ]))->withContext('App\\Controller\\API\\ProjectApiController::delete()', $container);
    }
}
