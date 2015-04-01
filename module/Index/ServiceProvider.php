<?php 

namespace Index;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Mendo\Mvc\Module\Module;
use Mendo\Mvc\Router\DefaultRouter;

class ServiceProvider extends Module implements ServiceProviderInterface
{
    public function __construct()
    {
        $name = 'index';
        $path = __DIR__;
        $namespace = 'Index';

        parent::__construct($name, $path, $namespace);
    }

    public function register(Container $container) 
    {
        $container->extend('module.collection', function($modules, $c) {
            $modules->add($this);

            return $modules;
        });

        $container->extend('acl.routes', function ($acl, $c) {
            $acl->addRole('unauthenticated');
            $acl->allow('unauthenticated', 'index/', '*');

            return $acl;
        });
    }
}
