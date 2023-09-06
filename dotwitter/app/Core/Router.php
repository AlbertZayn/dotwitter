<?php

namespace dotwitter\app\Core;

use dotwitter\app\Controllers\LoginController;
use dotwitter\app\Controllers\MainController;
use dotwitter\app\Controllers\HomeController;
use dotwitter\app\Controllers\ExploreController;
use dotwitter\app\Controllers\ProfileController;
use dotwitter\app\Controllers\RegisterController;
use dotwitter\app\Controllers\TweetsController;

class Router
{
    protected $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }
    public function handleRequest()
    {
        $path = $_SERVER['REQUEST_URI'];
        $routes = [
            '/' => ['class' => MainController::class, 'action' => 'getPage'],
            '/home' => ['class' => HomeController::class, 'action' => 'getPage'],
            '/explore' => ['class' => ExploreController::class, 'action' => 'getPage'],
            '/profile' => ['class' => ProfileController::class, 'action' => 'getPage'],
            '/register' => ['class' => RegisterController::class, 'action' => 'register'],
            '/login' => ['class' => LoginController::class, 'action' => 'login'],
            '/logout' => ['class' => LoginController::class, 'action' => 'logout'],
            '/post-tweet' => ['class' => TweetsController::class, 'action' => 'postTweet']
        ];

        if (isset($routes[$path])) {
            $controllerClass = $routes[$path]['class'];
            $action = $routes[$path]['action'];

            $controller = new $controllerClass();
            $controller->$action();
        }
    }
}