<?php

namespace dotwitter\app\Models;

use dotwitter\app\database\ConnectToDatabase;
use dotwitter\app\database\TweetQuery;
use PDO;

class TweetsModel
{
    protected $pdo;
    protected $tweetQuery;
    public function __construct()
    {
        $config = require_once __DIR__ . '/../database/config.php';
        $this->pdo = ConnectToDatabase::connect($config);
        $this->tweetQuery = new TweetQuery($this->pdo);
    }
    public function createTweet($userId, $text, $fullname)
    {
        $username = $_SESSION['user_data']['username'];
        return $this->tweetQuery->createTweet($userId, $text, $fullname, $username);
    }

    public function getAllTweets()
    {
        return $this->tweetQuery->getAllTweets();
    }

    public function tweetsByKeyword($keyword)
    {
        return $this->tweetQuery->tweetsByKeyword($keyword);
    }
}