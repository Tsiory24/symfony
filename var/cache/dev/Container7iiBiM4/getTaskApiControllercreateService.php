<?php

namespace Container7iiBiM4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaskApiControllercreateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kt6nDhg.App\Controller\API\TaskApiController::create()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.kt6nDhg'] ?? $container->load('get_ServiceLocator_Kt6nDhgService'));

        if (isset($container->privates['.service_locator.kt6nDhg.App\\Controller\\API\\TaskApiController::create()'])) {
            return $container->privates['.service_locator.kt6nDhg.App\\Controller\\API\\TaskApiController::create()'];
        }

        return $container->privates['.service_locator.kt6nDhg.App\\Controller\\API\\TaskApiController::create()'] = $a->withContext('App\\Controller\\API\\TaskApiController::create()', $container);
    }
}
