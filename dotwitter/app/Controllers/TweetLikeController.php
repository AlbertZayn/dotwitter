<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Models\TweetsModel;
use Exception;

class TweetLikeController
{
    public function likeTweet()
    {
        try {
            $_POST = json_decode(file_get_contents("php://input"), true);
            $tweetId = $_POST["tweetId"];
            $userId = $_SESSION['user_data']['id'];

            $tweetsModel = new TweetsModel();

            $isLiked = $tweetsModel->checkTweetLike($userId, $tweetId);
            if ($isLiked) {
                $tweetLikes = $tweetsModel->unlikeTweet($tweetId, $userId);
            } else {
                $tweetLikes = $tweetsModel->likeTweet($tweetId, $userId);
            }

            echo json_encode(["success" => true, "likes" => (int)$tweetLikes, "isLiked" => $isLiked]);
        } catch (Exception $e) {
            echo json_encode(["success" => false, "message" => $e->getMessage()]);
        }
    }
}