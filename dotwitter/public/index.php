<?php

require __DIR__ . '/autoloader.php';

use dotwitter\app\Core\Router;
use dotwitter\app\Core\Container;
use dotwitter\app\Core\ServiceProvider;

$container = Container::getInstance();
$provider = new ServiceProvider($container);
$provider->register();

$router = new Router($container);
$router->handleRequest();

function app($abstract)
{
    global $container;
    return $container->make($abstract);
}

var_dump($_POST);
error_reporting(E_ALL);
ini_set('display_errors', 1);