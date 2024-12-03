<?php

namespace Container7iiBiM4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaskApiControllerupdateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rfnbaGH.App\Controller\API\TaskApiController::update()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rfnbaGH.App\\Controller\\API\\TaskApiController::update()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'repository' => ['privates', 'App\\Repository\\TaskRepository', 'getTaskRepositoryService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'serializer' => ['privates', 'debug.serializer', 'getDebug_SerializerService', false],
        ], [
            'repository' => 'App\\Repository\\TaskRepository',
            'em' => '?',
            'serializer' => '?',
        ]))->withContext('App\\Controller\\API\\TaskApiController::update()', $container);
    }
}
