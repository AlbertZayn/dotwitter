<?php

namespace dotwitter\app\Views\layers;

class TweetsFeedView
{
    private $tweets;

    public function __construct($tweets)
    {
        $this->tweets = $tweets;
    }

    public function tweetFeedShowContent()
    {
        ob_start();
        require_once __DIR__ . '/../../Views/layouts/tweetsFeed.tpl.php';
        $tweetsFeed = ob_get_clean();
        return $tweetsFeed;
    }

    public function render()
    {
        require_once __DIR__ . '/../../Views/layouts/tweetsFeed.tpl.php';
    }
}
