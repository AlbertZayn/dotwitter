<?php

namespace dotwitter\app\Controllers;

class ProfileController
{
    public static function getPage()
    {
        require_once __DIR__ . '/../Views/profile.php';
    }
}