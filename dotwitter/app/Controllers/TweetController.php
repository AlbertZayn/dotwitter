<?php

namespace dotwitter\App\Controllers;

use dotwitter\App\Models\TweetModel;

class TweetController
{
    public function index()
    {
        include_once __DIR__ . '/../Views/main.php';
    }
}