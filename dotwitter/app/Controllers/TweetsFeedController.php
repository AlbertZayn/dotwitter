<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Models\TweetsModel;
use dotwitter\app\Views\layers\TweetsFeedView;

class TweetsFeedController
{
    public function showTweetsFeed()
    {
        $tweetsModel = new TweetsModel();
        $tweets = $tweetsModel->getTweets();
        $tweetsFeedView = new TweetsFeedView($tweets);
        return $tweetsFeedView->tweetFeedShowContent();
    }
}
