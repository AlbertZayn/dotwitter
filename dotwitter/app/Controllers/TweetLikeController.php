<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Models\TweetsModel;
use Exception;

class TweetLikeController
{
    public function likeTweet()
    {
        try {
            $tweetId = $_POST["tweetId"];
            $liked = $_POST["liked_by_user"];

            $tweetsModel = new TweetsModel();

            $tweetLikes = $tweetsModel->getTweetLikesCount($tweetId);

            if (!$liked) {
                $tweetLikes++;
                $tweetsModel->likeTweet($tweetId);
            } else {
                $tweetLikes--;
                $tweetsModel->unlikeTweet($tweetId);
            }

            echo json_encode(["success" => true, "likes" => (int)$tweetLikes]);;
        } catch (Exception $e) {
            echo json_encode(["success" => false, "message" => $e->getMessage()]);
        }
    }
}