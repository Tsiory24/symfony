<?php

namespace Container0F6Jo2C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\API\\EtudiantApiController::sendStudents' => ['privates', '.service_locator.StOMeRL.App\\Controller\\API\\EtudiantApiController::sendStudents()', 'getEtudiantApiControllersendStudentsService', true],
            'App\\Controller\\API\\ProjectApiController::create' => ['privates', '.service_locator.6bZcwVI.App\\Controller\\API\\ProjectApiController::create()', 'getProjectApiControllercreateService', true],
            'App\\Controller\\API\\ProjectApiController::findAll' => ['privates', '.service_locator.IqCLR.y.App\\Controller\\API\\ProjectApiController::findAll()', 'getProjectApiControllerfindAllService', true],
            'App\\Controller\\API\\ProjectApiController::findById' => ['privates', '.service_locator.mlTFQ4a.App\\Controller\\API\\ProjectApiController::findById()', 'getProjectApiControllerfindByIdService', true],
            'App\\Controller\\API\\ProjectApiController::update' => ['privates', '.service_locator.8i9eKYQ.App\\Controller\\API\\ProjectApiController::update()', 'getProjectApiControllerupdateService', true],
            'App\\Controller\\API\\ProjectApiController::delete' => ['privates', '.service_locator.2QQSS.I.App\\Controller\\API\\ProjectApiController::delete()', 'getProjectApiControllerdeleteService', true],
            'App\\Controller\\API\\TaskApiController::create' => ['privates', '.service_locator.kt6nDhg.App\\Controller\\API\\TaskApiController::create()', 'getTaskApiControllercreateService', true],
            'App\\Controller\\API\\TaskApiController::findAll' => ['privates', '.service_locator.oUPLUKJ.App\\Controller\\API\\TaskApiController::findAll()', 'getTaskApiControllerfindAllService', true],
            'App\\Controller\\API\\TaskApiController::findById' => ['privates', '.service_locator.KFjOq3Z.App\\Controller\\API\\TaskApiController::findById()', 'getTaskApiControllerfindByIdService', true],
            'App\\Controller\\API\\TaskApiController::update' => ['privates', '.service_locator.rfnbaGH.App\\Controller\\API\\TaskApiController::update()', 'getTaskApiControllerupdateService', true],
            'App\\Controller\\API\\TaskApiController::delete' => ['privates', '.service_locator.IEWs.VD.App\\Controller\\API\\TaskApiController::delete()', 'getTaskApiControllerdeleteService', true],
            'App\\Controller\\API\\UserApiController::create' => ['privates', '.service_locator.Hl9pM3T.App\\Controller\\API\\UserApiController::create()', 'getUserApiControllercreateService', true],
            'App\\Controller\\API\\UserApiController::findAll' => ['privates', '.service_locator.zXOlprV.App\\Controller\\API\\UserApiController::findAll()', 'getUserApiControllerfindAllService', true],
            'App\\Controller\\API\\UserApiController::findById' => ['privates', '.service_locator.hKA2je_.App\\Controller\\API\\UserApiController::findById()', 'getUserApiControllerfindByIdService', true],
            'App\\Controller\\API\\UserApiController::update' => ['privates', '.service_locator.l0IVsP_.App\\Controller\\API\\UserApiController::update()', 'getUserApiControllerupdateService', true],
            'App\\Controller\\API\\UserApiController::delete' => ['privates', '.service_locator.oVZnsgP.App\\Controller\\API\\UserApiController::delete()', 'getUserApiControllerdeleteService', true],
            'App\\Controller\\API\\UserApiController::login' => ['privates', '.service_locator.uP.P_Zl.App\\Controller\\API\\UserApiController::login()', 'getUserApiControllerloginService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.FrXYrTV.App\\Controller\\HomeController::index()', 'getHomeControllerindexService', true],
            'App\\Controller\\ProjectController::index' => ['privates', '.service_locator.IqCLR.y.App\\Controller\\ProjectController::index()', 'getProjectControllerindexService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.g9BceMG.App\\Controller\\RegistrationController::register()', 'getRegistrationControllerregisterService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'App\\Controller\\TaskController::index' => ['privates', '.service_locator.oUPLUKJ.App\\Controller\\TaskController::index()', 'getTaskControllerindexService', true],
            'App\\Controller\\TaskController::show' => ['privates', '.service_locator.oUPLUKJ.App\\Controller\\TaskController::show()', 'getTaskControllershowService', true],
            'App\\Controller\\TaskController::edit' => ['privates', '.service_locator.kt6nDhg.App\\Controller\\TaskController::edit()', 'getTaskControllereditService', true],
            'App\\Controller\\TaskController::create' => ['privates', '.service_locator.TWxDQA4.App\\Controller\\TaskController::create()', 'getTaskControllercreateService', true],
            'App\\Controller\\TaskController::delete' => ['privates', '.service_locator.GOh.w0m.App\\Controller\\TaskController::delete()', 'getTaskControllerdeleteService', true],
            'App\\Controller\\TaskController::paginate' => ['privates', '.service_locator.oUPLUKJ.App\\Controller\\TaskController::paginate()', 'getTaskControllerpaginateService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\API\\EtudiantApiController:sendStudents' => ['privates', '.service_locator.StOMeRL.App\\Controller\\API\\EtudiantApiController::sendStudents()', 'getEtudiantApiControllersendStudentsService', true],
            'App\\Controller\\API\\ProjectApiController:create' => ['privates', '.service_locator.6bZcwVI.App\\Controller\\API\\ProjectApiController::create()', 'getProjectApiControllercreateService', true],
            'App\\Controller\\API\\ProjectApiController:findAll' => ['privates', '.service_locator.IqCLR.y.App\\Controller\\API\\ProjectApiController::findAll()', 'getProjectApiControllerfindAllService', true],
            'App\\Controller\\API\\ProjectApiController:findById' => ['privates', '.service_locator.mlTFQ4a.App\\Controller\\API\\ProjectApiController::findById()', 'getProjectApiControllerfindByIdService', true],
            'App\\Controller\\API\\ProjectApiController:update' => ['privates', '.service_locator.8i9eKYQ.App\\Controller\\API\\ProjectApiController::update()', 'getProjectApiControllerupdateService', true],
            'App\\Controller\\API\\ProjectApiController:delete' => ['privates', '.service_locator.2QQSS.I.App\\Controller\\API\\ProjectApiController::delete()', 'getProjectApiControllerdeleteService', true],
            'App\\Controller\\API\\TaskApiController:create' => ['privates', '.service_locator.kt6nDhg.App\\Controller\\API\\TaskApiController::create()', 'getTaskApiControllercreateService', true],
            'App\\Controller\\API\\TaskApiController:findAll' => ['privates', '.service_locator.oUPLUKJ.App\\Controller\\API\\TaskApiController::findAll()', 'getTaskApiControllerfindAllService', true],
            'App\\Controller\\API\\TaskApiController:findById' => ['privates', '.service_locator.KFjOq3Z.App\\Controller\\API\\TaskApiController::findById()', 'getTaskApiControllerfindByIdService', true],
            'App\\Controller\\API\\TaskApiController:update' => ['privates', '.service_locator.rfnbaGH.App\\Controller\\API\\TaskApiController::update()', 'getTaskApiControllerupdateService', true],
            'App\\Controller\\API\\TaskApiController:delete' => ['privates', '.service_locator.IEWs.VD.App\\Controller\\API\\TaskApiController::delete()', 'getTaskApiControllerdeleteService', true],
            'App\\Controller\\API\\UserApiController:create' => ['privates', '.service_locator.Hl9pM3T.App\\Controller\\API\\UserApiController::create()', 'getUserApiControllercreateService', true],
            'App\\Controller\\API\\UserApiController:findAll' => ['privates', '.service_locator.zXOlprV.App\\Controller\\API\\UserApiController::findAll()', 'getUserApiControllerfindAllService', true],
            'App\\Controller\\API\\UserApiController:findById' => ['privates', '.service_locator.hKA2je_.App\\Controller\\API\\UserApiController::findById()', 'getUserApiControllerfindByIdService', true],
            'App\\Controller\\API\\UserApiController:update' => ['privates', '.service_locator.l0IVsP_.App\\Controller\\API\\UserApiController::update()', 'getUserApiControllerupdateService', true],
            'App\\Controller\\API\\UserApiController:delete' => ['privates', '.service_locator.oVZnsgP.App\\Controller\\API\\UserApiController::delete()', 'getUserApiControllerdeleteService', true],
            'App\\Controller\\API\\UserApiController:login' => ['privates', '.service_locator.uP.P_Zl.App\\Controller\\API\\UserApiController::login()', 'getUserApiControllerloginService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.FrXYrTV.App\\Controller\\HomeController::index()', 'getHomeControllerindexService', true],
            'App\\Controller\\ProjectController:index' => ['privates', '.service_locator.IqCLR.y.App\\Controller\\ProjectController::index()', 'getProjectControllerindexService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.g9BceMG.App\\Controller\\RegistrationController::register()', 'getRegistrationControllerregisterService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'App\\Controller\\TaskController:index' => ['privates', '.service_locator.oUPLUKJ.App\\Controller\\TaskController::index()', 'getTaskControllerindexService', true],
            'App\\Controller\\TaskController:show' => ['privates', '.service_locator.oUPLUKJ.App\\Controller\\TaskController::show()', 'getTaskControllershowService', true],
            'App\\Controller\\TaskController:edit' => ['privates', '.service_locator.kt6nDhg.App\\Controller\\TaskController::edit()', 'getTaskControllereditService', true],
            'App\\Controller\\TaskController:create' => ['privates', '.service_locator.TWxDQA4.App\\Controller\\TaskController::create()', 'getTaskControllercreateService', true],
            'App\\Controller\\TaskController:delete' => ['privates', '.service_locator.GOh.w0m.App\\Controller\\TaskController::delete()', 'getTaskControllerdeleteService', true],
            'App\\Controller\\TaskController:paginate' => ['privates', '.service_locator.oUPLUKJ.App\\Controller\\TaskController::paginate()', 'getTaskControllerpaginateService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\API\\EtudiantApiController::sendStudents' => '?',
            'App\\Controller\\API\\ProjectApiController::create' => '?',
            'App\\Controller\\API\\ProjectApiController::findAll' => '?',
            'App\\Controller\\API\\ProjectApiController::findById' => '?',
            'App\\Controller\\API\\ProjectApiController::update' => '?',
            'App\\Controller\\API\\ProjectApiController::delete' => '?',
            'App\\Controller\\API\\TaskApiController::create' => '?',
            'App\\Controller\\API\\TaskApiController::findAll' => '?',
            'App\\Controller\\API\\TaskApiController::findById' => '?',
            'App\\Controller\\API\\TaskApiController::update' => '?',
            'App\\Controller\\API\\TaskApiController::delete' => '?',
            'App\\Controller\\API\\UserApiController::create' => '?',
            'App\\Controller\\API\\UserApiController::findAll' => '?',
            'App\\Controller\\API\\UserApiController::findById' => '?',
            'App\\Controller\\API\\UserApiController::update' => '?',
            'App\\Controller\\API\\UserApiController::delete' => '?',
            'App\\Controller\\API\\UserApiController::login' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\ProjectController::index' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\TaskController::index' => '?',
            'App\\Controller\\TaskController::show' => '?',
            'App\\Controller\\TaskController::edit' => '?',
            'App\\Controller\\TaskController::create' => '?',
            'App\\Controller\\TaskController::delete' => '?',
            'App\\Controller\\TaskController::paginate' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\API\\EtudiantApiController:sendStudents' => '?',
            'App\\Controller\\API\\ProjectApiController:create' => '?',
            'App\\Controller\\API\\ProjectApiController:findAll' => '?',
            'App\\Controller\\API\\ProjectApiController:findById' => '?',
            'App\\Controller\\API\\ProjectApiController:update' => '?',
            'App\\Controller\\API\\ProjectApiController:delete' => '?',
            'App\\Controller\\API\\TaskApiController:create' => '?',
            'App\\Controller\\API\\TaskApiController:findAll' => '?',
            'App\\Controller\\API\\TaskApiController:findById' => '?',
            'App\\Controller\\API\\TaskApiController:update' => '?',
            'App\\Controller\\API\\TaskApiController:delete' => '?',
            'App\\Controller\\API\\UserApiController:create' => '?',
            'App\\Controller\\API\\UserApiController:findAll' => '?',
            'App\\Controller\\API\\UserApiController:findById' => '?',
            'App\\Controller\\API\\UserApiController:update' => '?',
            'App\\Controller\\API\\UserApiController:delete' => '?',
            'App\\Controller\\API\\UserApiController:login' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\ProjectController:index' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\TaskController:index' => '?',
            'App\\Controller\\TaskController:show' => '?',
            'App\\Controller\\TaskController:edit' => '?',
            'App\\Controller\\TaskController:create' => '?',
            'App\\Controller\\TaskController:delete' => '?',
            'App\\Controller\\TaskController:paginate' => '?',
        ]));
    }
}
