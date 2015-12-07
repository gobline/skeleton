<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);
header('content-type: text/html; charset=utf-8');
date_default_timezone_set('Europe/Brussels');
chdir(dirname(__DIR__));

require './vendor/autoload.php';

use Gobline\Application\Facade;

$app = new Facade();

$app->getRegistrar()
    ->register(getcwd().'/config/services.php')
    ->register(getcwd().'/config/routes.php');

$app->run();
