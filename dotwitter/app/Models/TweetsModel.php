<?php

namespace dotwitter\app\Models;

use dotwitter\app\database\ConnectToDatabase;
use dotwitter\app\database\TweetsQuery;

class TweetsModel
{
    protected $pdo;
    protected $tweetsQuery;
    public function __construct()
    {
        $config = require_once __DIR__ . '/../database/config.php';
        $this->pdo = ConnectToDatabase::connect($config);
        $this->tweetsQuery = new TweetsQuery($this->pdo);
    }
    public function createTweet($userId, $text, $fullname)
    {
        $username = $_SESSION['user_data']['username'];
        return $this->tweetsQuery->createTweet($userId, $text, $fullname, $username);
    }

    public function getAllTweets()
    {
        return $this->tweetsQuery->getAllTweets();
    }

    public function tweetsByKeyword($keyword)
    {
        return $this->tweetsQuery->tweetsByKeyword($keyword);
    }
}

