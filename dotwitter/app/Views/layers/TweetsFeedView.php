<?php

namespace dotwitter\app\Views\layers;

class TweetsFeedView
{
    private $content;
    private $title;
    private $adminTweets;

    public function __construct($content, $title, $adminTweets)
    {
        $this->content = $content;
        $this->title = $title;
        $this->adminTweets = $adminTweets;
    }

    public static function adminDataPage($pageView, $title, $adminTweets): TweetsFeedView
    {
        ob_start();
        require_once __DIR__ . '/../../Views/layouts/leftSidebar.tpl.php';
        $leftSidebar = ob_get_clean();

        ob_start();
        require_once __DIR__ . '/../../Views/layouts/tweetPostForm.svgs.php';
        $tweetPostFormSvgs = ob_get_clean();

        ob_start();
        require_once __DIR__ . '/../../Views/layouts/adminTweetsFeed.tpl.php';
        $adminTweetsFeed = ob_get_clean();

        ob_start();
        require_once __DIR__ . '/../../Views/pages/' . $pageView;
        $pageContent = ob_get_clean();

        return new self($pageContent, $title, $adminTweets);
    }

    public function render($tweetsFeedView)
    {
        ob_start();
        echo $tweetsFeedView;
        $tweetsFeedView = ob_get_contents();
        ob_end_clean();

        require_once __DIR__ . '/../layouts/page.tpl.php';
    }

    public function getAdminContent()
    {
        return $this->content;
    }
}