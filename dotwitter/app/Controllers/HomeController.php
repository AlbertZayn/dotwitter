<?php

namespace dotwitter\app\Controllers;

class HomeController
{
    public static function getPage()
    {
        require_once __DIR__ . '/../Views/home.php';
    }
}