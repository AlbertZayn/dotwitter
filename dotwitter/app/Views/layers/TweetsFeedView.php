<?php

namespace dotwitter\app\Views\layers;

class TweetsFeedView
{
    private $tweets;
    public function __construct()
    {
        $this->tweets = $tweets;
    }

    public function dynamicTweetsFeed($pageView, $filteredTweets)
    {
        ob_start();
        require_once __DIR__ . '/../../Views/layouts/globalTweetsFeed.tpl.php';
        $filteredTweets = ob_get_clean();
        return $filteredTweets;
    }

    public function render()
    {
        require_once __DIR__ . '/../../Views/layouts/globalTweetsFeed.tpl.php';
    }
}
