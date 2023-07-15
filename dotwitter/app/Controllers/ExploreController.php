<?php

namespace dotwitter\app\Controllers;

class ExploreController
{
    public static function getPage()
    {
        require_once __DIR__ . '/../Views/explore.php';
    }
}