<?php

namespace dotwitter\app\Controllers;

class MainController
{
    public static function getPage()
    {
        require_once __DIR__ . '/../Views/main.php';
    }
}