<?php

namespace dotwitter\app\Core;

use dotwitter\app\Views\layers\PageContent;
use dotwitter\app\Views\layers\TweetsFeedView;

class ServiceProvider
{
    protected $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function pageContentRender()
    {
        $this->container->bind('PageContent', function () {
            return new PageContent('', '', '');
        });
    }

    public function tweetFeedRender()
    {
        $this->container->bind('TweetsFeedView', function() {
            return new TweetsFeedView('');
        });
    }
}