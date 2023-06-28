<?php

require_once __DIR__ . '/autoloader.php';

use dotwitter\Core\Router;

$path = $_SERVER['REQUEST_URI']; 
if ($path === '/home') { 
    require_once('app/Views/home.php');
}
else { 
    require_once('app/Views/explore.php');
}



