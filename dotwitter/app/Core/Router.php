<?php

namespace dotwitter\app\Core;

class Router
{
    public function handleRequest()
    {
        $controllerName = 'dotwitter\\app\\Controllers\\TweetController';
        $action = 'index';

        if (isset($_GET['controller'])) {
            $controllerName = 'dotwitter\\app\\Controllers\\' . ucfirst($_GET['controller']) . 'Controller';
        }

        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        }

        $controller = new $controllerName();
        $controller->$action();
    }
}
