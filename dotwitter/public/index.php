<?php

require __DIR__ . '/autoloader.php';

use dotwitter\app\Core\Router;
$router = new Router();
$router->handleRequest();