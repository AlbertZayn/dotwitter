<?php

namespace dotwitter\app\Core;
use dotwitter\app\Controllers\MainController;

class Router
{
    public function handleRequest()
    {
        $controller = MainController::class;
        $controller::getPage();

//        if (isset($_GET['controller'])) {
//            $controllerName = 'dotwitter\\app\\Controllers\\' . ucfirst($_GET['controller']) . 'Controller';
//        }
//
//        if (isset($_GET['action'])) {
//            $action = $_GET['action'];
//        }
    }
}