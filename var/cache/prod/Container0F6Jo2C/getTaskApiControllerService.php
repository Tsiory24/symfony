<?php

namespace Container0F6Jo2C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaskApiControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\API\TaskApiController' shared autowired service.
     *
     * @return \App\Controller\API\TaskApiController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\API\\TaskApiController'] = $instance = new \App\Controller\API\TaskApiController();

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\API\\TaskApiController', $container));

        return $instance;
    }
}
