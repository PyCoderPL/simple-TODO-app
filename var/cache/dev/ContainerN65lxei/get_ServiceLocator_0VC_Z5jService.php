<?php

namespace ContainerN65lxei;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0VC_Z5jService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0VC.z5j' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0VC.z5j'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator(
            $container->getService ??= $container->getService(...), [
            'bodyRenderer' => ['privates', '.errored.PTIKQrZ', null, 'Cannot determine controller argument for "App\\Controller\\SecurityController::register()": the $bodyRenderer argument is type-hinted with the non-existent class or interface: "App\\Controller\\BodyRendererInterface". Did you forget to add a use statement?'],
            'bus' => ['privates', '.errored.qJMgL0y', null, 'Cannot determine controller argument for "App\\Controller\\SecurityController::register()": the $bus argument is type-hinted with the non-existent class or interface: "App\\Controller\\MessageBusInterface". Did you forget to add a use statement?'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'hasherInterface' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            ], [
            'bodyRenderer' => '?',
            'bus' => '?',
            'em' => '?',
            'hasherInterface' => '?',
            'mailer' => '?',
            ]
        );
    }
}
