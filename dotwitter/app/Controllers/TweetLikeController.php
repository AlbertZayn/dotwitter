<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Models\TweetsModel;

class TweetLikeController extends SessionController
{
    public function likeTweet()
    {
        if (!isset($_POST['tweetId']) || !isset($_POST['liked'])) {
            echo json_encode(['success' => false, 'message' => 'Invalid request']);
            return;
        }

        $tweetId = $_POST['tweetId'];
        $liked = $_POST['liked'];

        $tweetsModel = new TweetsModel();
        $success = $tweetsModel->likeTweet($tweetId, $liked);

        if ($success) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to update like']);
        }
    }
}
