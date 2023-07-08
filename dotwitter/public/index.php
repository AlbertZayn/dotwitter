<?php


require_once __DIR__ . '/autoloader.php';

use dotwitter\app\Core\Router;

$path = $_SERVER['REQUEST_URI'];
if ($path === '/home') {
    require_once(__DIR__ . '/../app/Views/home.php');
}
else if ($path === '/explore') {
        require_once(__DIR__ . '/../app/Views/explore.php');
    }
else if ($path === '/profile') {
    require_once(__DIR__ . '/../app/Views/profile.php');
} else {
    require_once(__DIR__ . '/../app/Views/main.php');
}