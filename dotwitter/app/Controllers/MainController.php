<?php

namespace dotwitter\app\Controllers;

class MainController
{
    public function index()
    {
        include_once __DIR__ . '/../Views/main.php';
    }
}