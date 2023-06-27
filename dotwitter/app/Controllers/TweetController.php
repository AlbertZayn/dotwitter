<?php

namespace dotwitter\App\Controllers;

use dotwitter\App\Models\TweetModel;

class TweetController
{
    public function index()
    {
        $model = new TweetModel();
        $message = $model->getMessage();

        include_once __DIR__ . '/../Views/HomePage.php';
    }
}