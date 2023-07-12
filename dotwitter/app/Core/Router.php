<?php

namespace dotwitter\app\Core;

use dotwitter\app\Controllers\MainController;
use dotwitter\app\Controllers\HomeController;
use dotwitter\app\Controllers\ExploreController;
use dotwitter\app\Controllers\ProfileController;

class Router
{
    public function handleRequest()
    {
        $routes = [
            '/' => ['controller' => MainController::class, 'action' => 'index'],
            '/home' => ['controller' => HomeController::class, 'action' => 'index'],
            '/explore' => ['controller' => ExploreController::class, 'action' => 'index'],
            '/profile' => ['controller' => ProfileController::class, 'action' => 'index'],
        ];

        $path = $_SERVER['REQUEST_URI'];
        if (isset($routes[$path])) {
            $controllerName = $routes[$path]['controller'];
            $action = $routes[$path]['action'];
        } else {
            // ошибки
            return;
        }

        $controller = new $controllerName();
        $controller->$action();
    }


}