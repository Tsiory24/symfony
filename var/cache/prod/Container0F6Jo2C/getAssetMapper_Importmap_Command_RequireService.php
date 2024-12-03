<?php

namespace Container0F6Jo2C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_Command_RequireService extends App_KernelProdContainer
{
    /*
     * Gets the private 'asset_mapper.importmap.command.require' shared service.
     *
     * @return \Symfony\Component\AssetMapper\Command\ImportMapRequireCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['asset_mapper.importmap.command.require'] = $instance = new \Symfony\Component\AssetMapper\Command\ImportMapRequireCommand(($container->privates['asset_mapper.importmap.manager'] ?? $container->load('getAssetMapper_Importmap_ManagerService')), ($container->privates['asset_mapper.importmap.version_checker'] ?? $container->load('getAssetMapper_Importmap_VersionCheckerService')));

        $instance->setName('importmap:require');
        $instance->setDescription('Require JavaScript packages');

        return $instance;
    }
}
