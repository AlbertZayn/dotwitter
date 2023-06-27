<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/autoloader.php';

use dotwitter\Core\Router;

$router = new Router();
$router->handleRequest();

var_dump($_GET);

$path = $_SERVER['REQUEST_URI']; 
if ($path === '/home') { 
    require_once('app/Views/home.html');
}
else { 
    require_once('app/Views/explore.html');
} 

