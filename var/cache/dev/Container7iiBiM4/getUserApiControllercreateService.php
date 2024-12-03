<?php

namespace Container7iiBiM4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserApiControllercreateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Hl9pM3T.App\Controller\API\UserApiController::create()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Hl9pM3T.App\\Controller\\API\\UserApiController::create()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'user' => ['privates', '.errored..service_locator.Hl9pM3T.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.Hl9pM3T": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'user' => 'App\\Entity\\User',
            'userPasswordHasher' => '?',
            'em' => '?',
        ]))->withContext('App\\Controller\\API\\UserApiController::create()', $container);
    }
}
