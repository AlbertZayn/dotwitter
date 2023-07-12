<?php

namespace dotwitter\app\Controllers;

class ProfileController
{
    public function index()
    {
        include_once __DIR__ . '/../Views/profile.php';
    }
}