<?php

namespace dotwitter\app\Controllers;
use dotwitter\app\Models\TweetsModel;

class TweetsController
{
    public static function getTweets()
    {
        $tweets = TweetsModel::getLatestTweets();
        $page = new TweetForm($tweets);
        $page->render();
    }
}