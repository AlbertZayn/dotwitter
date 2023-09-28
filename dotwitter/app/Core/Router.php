<?php

namespace dotwitter\app\Core;

use dotwitter\app\Controllers\LoginController;
use dotwitter\app\Controllers\MainPageController;
use dotwitter\app\Controllers\HomePageController;
use dotwitter\app\Controllers\ExplorePageController;
use dotwitter\app\Controllers\ProfilePageController;
use dotwitter\app\Controllers\RegisterController;
use dotwitter\app\Controllers\TweetPostController;
use dotwitter\app\Controllers\AdminPageController;

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
            '/' => ['class' => MainPageController::class, 'action' => 'getPage'],
            '/home' => ['class' => HomePageController::class, 'action' => 'getPage'],
            '/explore' => ['class' => ExplorePageController::class, 'action' => 'getPage'],
            '/profile' => ['class' => ProfilePageController::class, 'action' => 'getPage'],
            '/register' => ['class' => RegisterController::class, 'action' => 'register'],
            '/login' => ['class' => LoginController::class, 'action' => 'login'],
            '/logout' => ['class' => LoginController::class, 'action' => 'logout'],
            '/post-tweet' => ['class' => TweetPostController::class, 'action' => 'postTweet'],
            '/tweets-search' => ['class' => ExplorePageController::class, 'action' => 'getPage'],
            '/admin' => ['class' => AdminPageController::class, 'action' => 'getPage'],
            '/admin-tweets-search' => ['class' => AdminPageController::class, 'action' => 'getPage'],
            '/delete-tweet' => ['class' => AdminPageController::class, 'action' => 'deleteTweet'],
            '/block-user' => ['class' => AdminPageController::class, 'action' => 'blockUser'],
            '/delete-user' => ['class' => AdminPageController::class, 'action' => 'deleteUser']
        ];

        if (isset($routes[$path])) {
            $controllerClass = $routes[$path]['class'];
            $action = $routes[$path]['action'];

            $controller = new $controllerClass();
            $controller->$action();
        }
    }
}