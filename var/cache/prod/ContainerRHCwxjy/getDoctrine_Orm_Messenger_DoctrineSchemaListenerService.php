<?php

namespace ContainerRHCwxjy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Messenger_DoctrineSchemaListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.orm.messenger.doctrine_schema_listener' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\SchemaListener\MessengerTransportDoctrineSchemaListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine.orm.messenger.doctrine_schema_listener'] = new \Symfony\Bridge\Doctrine\SchemaListener\MessengerTransportDoctrineSchemaListener(new RewindableGenerator(fn () => new \EmptyIterator(), 0));
    }
}
