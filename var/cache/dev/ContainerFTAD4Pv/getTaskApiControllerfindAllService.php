<?php

namespace ContainerFTAD4Pv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaskApiControllerfindAllService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oUPLUKJ.App\Controller\API\TaskApiController::findAll()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.oUPLUKJ'] ?? $container->load('get_ServiceLocator_OUPLUKJService'));

        if (isset($container->privates['.service_locator.oUPLUKJ.App\\Controller\\API\\TaskApiController::findAll()'])) {
            return $container->privates['.service_locator.oUPLUKJ.App\\Controller\\API\\TaskApiController::findAll()'];
        }

        return $container->privates['.service_locator.oUPLUKJ.App\\Controller\\API\\TaskApiController::findAll()'] = $a->withContext('App\\Controller\\API\\TaskApiController::findAll()', $container);
    }
}
