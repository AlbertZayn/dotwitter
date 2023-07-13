<?php

require_once __DIR__ . '/autoloader.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

use dotwitter\app\Core\Router;
$router = new Router();
$router->handleRequest();

