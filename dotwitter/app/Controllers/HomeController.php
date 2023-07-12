<?php

namespace dotwitter\app\Controllers;

class HomeController
{
    public function index()
    {
        include_once __DIR__ . '/../Views/home.php';
    }
}

