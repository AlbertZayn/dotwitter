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

    public function getAllTweets() {
        $tweets = $this->tweetsQuery->getAllTweets();
        $userId = $_SESSION['user_data']['id'];

        foreach ($tweets as &$tweet) {
            $tweet['isLiked'] = $this->getLikedStatusForUser($tweet['id'], $userId);
        }

        return $tweets;
    }


    public function getTweetsByKeyword($keyword)
    {
        return $this->tweetsQuery->getTweetsByKeyword($keyword);
    }

    public function deleteTweet($tweetId): bool
    {
        return $this->tweetsQuery->deleteTweet($tweetId);
    }

    public function getTweetLikesCount($tweetId)
    {
        return $this->tweetsQuery->getTweetLikesCount($tweetId);
    }

    public function checkTweetLike($userId, $tweetId)
    {
        return $this->tweetsQuery->checkTweetLike($userId, $tweetId);
    }

    public function getLikedStatusForUser($tweetId, $userId) {
        return $this->tweetsQuery->checkTweetLike($userId, $tweetId);
    }

    public function likeTweet($tweetId, $userId): bool
    {
        return $this->tweetsQuery->likeTweet($tweetId, $userId);
    }

    public function unlikeTweet($tweetId, $userId)
    {
        return $this->tweetsQuery->unlikeTweet($tweetId, $userId);
    }
}