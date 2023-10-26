<?php

namespace dotwitter\app\Models;

use dotwitter\app\database\ConnectToDatabase;
use dotwitter\app\database\TweetsRepository;

class Tweet
{
    public $text;
    public $likes;
    public $retweets;
    public $user;
    public $replies;
    public $postTime;
    public $full_name;
    public $username;

    protected $pdo;
    protected $tweetRepo;

    public function __construct()
    {
        $config = require_once __DIR__ . '/../database/config.php';
        $this->pdo = ConnectToDatabase::connect($config);
        $this->tweetRepo = new TweetsRepository($this->pdo);
    }

    public function createTweet($userId, $text, $fullname)
    {
        $username = $_SESSION['user_data']['username'];
        return $this->tweetRepo->createTweet($userId, $text, $fullname, $username);
    }

    public function getAllTweets() {
        $tweets = $this->tweetRepo->getAllTweets();
        $userId = $_SESSION['user_data']['id'];

        foreach ($tweets as &$tweet) {
            $tweet['isLiked'] = $this->getLikedStatusForUser($tweet['id'], $userId);
        }

        return $tweets;
    }

    public function getTweetsByKeyword($keyword)
    {
        return $this->tweetRepo->getTweetsByKeyword($keyword);
    }

    public function deleteTweet($tweetId): bool
    {
        return $this->tweetRepo->deleteTweet($tweetId);
    }

    public function getTweetLikesCount($tweetId)
    {
        return $this->tweetRepo->getTweetLikesCount($tweetId);
    }

    public function checkTweetLike($userId, $tweetId)
    {
        return $this->tweetRepo->checkTweetLike($userId, $tweetId);
    }

    public function getLikedStatusForUser($tweetId, $userId) {
        return $this->tweetRepo->checkTweetLike($userId, $tweetId);
    }

    public function likeTweet($tweetId, $userId): bool
    {
        return $this->tweetRepo->likeTweet($tweetId, $userId);
    }

    public function unlikeTweet($tweetId, $userId)
    {
        return $this->tweetRepo->unlikeTweet($tweetId, $userId);
    }
}