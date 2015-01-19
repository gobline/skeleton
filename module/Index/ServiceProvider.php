<?php 

namespace Index;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Mendo\Mvc\Module\Module;

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
        $container->extend('modules', function($modules, $c) {
            $modules->add($this);

            return $modules;
        });
    }
}
