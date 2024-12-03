<?php

namespace ContainerFTAD4Pv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserApiControllerfindAllService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zXOlprV.App\Controller\API\UserApiController::findAll()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zXOlprV.App\\Controller\\API\\UserApiController::findAll()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'repository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\UserRepository',
        ]))->withContext('App\\Controller\\API\\UserApiController::findAll()', $container);
    }
}
