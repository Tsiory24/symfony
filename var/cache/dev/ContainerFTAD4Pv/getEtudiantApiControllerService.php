<?php

namespace ContainerFTAD4Pv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEtudiantApiControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\API\EtudiantApiController' shared autowired service.
     *
     * @return \App\Controller\API\EtudiantApiController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'API'.\DIRECTORY_SEPARATOR.'EtudiantApiController.php';

        $container->services['App\\Controller\\API\\EtudiantApiController'] = $instance = new \App\Controller\API\EtudiantApiController();

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\API\\EtudiantApiController', $container));

        return $instance;
    }
}
