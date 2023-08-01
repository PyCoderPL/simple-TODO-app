<?php

namespace ContainerN65lxei;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ewof2ALService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ewof2AL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ewof2AL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator(
            $container->getService ??= $container->getService(...), [
            'App\\Controller\\CreateController::createNewList' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\CreateController::createNewTask' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\CreateController::removeList' => ['privates', '.service_locator.gQzPcTj', 'get_ServiceLocator_GQzPcTjService', true],
            'App\\Controller\\CreateController::removeTask' => ['privates', '.service_locator.smnS.ND', 'get_ServiceLocator_SmnS_NDService', true],
            'App\\Controller\\EditController::editList' => ['privates', '.service_locator.aEJJF4Z', 'get_ServiceLocator_AEJJF4ZService', true],
            'App\\Controller\\EditController::editTask' => ['privates', '.service_locator.blHuOka', 'get_ServiceLocator_BlHuOkaService', true],
            'App\\Controller\\EditController::setFinished' => ['privates', '.service_locator.kPJs_7p', 'get_ServiceLocator_KPJs7pService', true],
            'App\\Controller\\MainController::showLists' => ['privates', '.service_locator.uaX9Qkz', 'get_ServiceLocator_UaX9QkzService', true],
            'App\\Controller\\MainController::showOneTask' => ['privates', '.service_locator.Cr7VRs3', 'get_ServiceLocator_Cr7VRs3Service', true],
            'App\\Controller\\MainController::showTasks' => ['privates', '.service_locator.d4b5Spv', 'get_ServiceLocator_D4b5SpvService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\SecurityController::register' => ['privates', '.service_locator.0VC.z5j', 'get_ServiceLocator_0VC_Z5jService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\CreateController:createNewList' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\CreateController:createNewTask' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\CreateController:removeList' => ['privates', '.service_locator.gQzPcTj', 'get_ServiceLocator_GQzPcTjService', true],
            'App\\Controller\\CreateController:removeTask' => ['privates', '.service_locator.smnS.ND', 'get_ServiceLocator_SmnS_NDService', true],
            'App\\Controller\\EditController:editList' => ['privates', '.service_locator.aEJJF4Z', 'get_ServiceLocator_AEJJF4ZService', true],
            'App\\Controller\\EditController:editTask' => ['privates', '.service_locator.blHuOka', 'get_ServiceLocator_BlHuOkaService', true],
            'App\\Controller\\EditController:setFinished' => ['privates', '.service_locator.kPJs_7p', 'get_ServiceLocator_KPJs7pService', true],
            'App\\Controller\\MainController:showLists' => ['privates', '.service_locator.uaX9Qkz', 'get_ServiceLocator_UaX9QkzService', true],
            'App\\Controller\\MainController:showOneTask' => ['privates', '.service_locator.Cr7VRs3', 'get_ServiceLocator_Cr7VRs3Service', true],
            'App\\Controller\\MainController:showTasks' => ['privates', '.service_locator.d4b5Spv', 'get_ServiceLocator_D4b5SpvService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\SecurityController:register' => ['privates', '.service_locator.0VC.z5j', 'get_ServiceLocator_0VC_Z5jService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            ], [
            'App\\Controller\\CreateController::createNewList' => '?',
            'App\\Controller\\CreateController::createNewTask' => '?',
            'App\\Controller\\CreateController::removeList' => '?',
            'App\\Controller\\CreateController::removeTask' => '?',
            'App\\Controller\\EditController::editList' => '?',
            'App\\Controller\\EditController::editTask' => '?',
            'App\\Controller\\EditController::setFinished' => '?',
            'App\\Controller\\MainController::showLists' => '?',
            'App\\Controller\\MainController::showOneTask' => '?',
            'App\\Controller\\MainController::showTasks' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::register' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\CreateController:createNewList' => '?',
            'App\\Controller\\CreateController:createNewTask' => '?',
            'App\\Controller\\CreateController:removeList' => '?',
            'App\\Controller\\CreateController:removeTask' => '?',
            'App\\Controller\\EditController:editList' => '?',
            'App\\Controller\\EditController:editTask' => '?',
            'App\\Controller\\EditController:setFinished' => '?',
            'App\\Controller\\MainController:showLists' => '?',
            'App\\Controller\\MainController:showOneTask' => '?',
            'App\\Controller\\MainController:showTasks' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:register' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            ]
        );
    }
}