<?php

namespace ContainerAP0vP6P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProjectApiControllerfindAllService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IqCLR.y.App\Controller\API\ProjectApiController::findAll()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IqCLR.y.App\\Controller\\API\\ProjectApiController::findAll()'] = ($container->privates['.service_locator.IqCLR.y'] ?? $container->load('get_ServiceLocator_IqCLR_YService'))->withContext('App\\Controller\\API\\ProjectApiController::findAll()', $container);
    }
}