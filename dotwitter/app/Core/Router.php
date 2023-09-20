<?php

namespace dotwitter\app\Core;

use dotwitter\app\Controllers\LoginController;
use dotwitter\app\Controllers\MainPageController;
use dotwitter\app\Controllers\HomePageController;
use dotwitter\app\Controllers\ExplorePageController;
use dotwitter\app\Controllers\ProfilePageController;
use dotwitter\app\Controllers\RegisterController;
use dotwitter\app\Controllers\TweetPostController;
use dotwitter\app\Controllers\TweetsFeedController;

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
            '/tweet-search' => ['class' => ExplorePageController::class, 'action' => 'getPage']
        ];

        if (isset($routes[$path])) {
            $controllerClass = $routes[$path]['class'];
            $action = $routes[$path]['action'];

            $controller = new $controllerClass();
            $controller->$action();
        }
    }
}