<?php

namespace dotwitter\app\Views\layers;

class PageContent
{
    private $content;
    private $title;
    private $globalTweets;
    private $userData;
    private $searchedUsers;

    public function __construct($content, $title, $globalTweets, $userData, $searchedUsers)
    {
        $this->content = $content;
        $this->title = $title;
        $this->globalTweets = $globalTweets;
        $this->userData = $userData;
        $this->searchedUsers = $searchedUsers;
    }

    public static function dynamicDataPage($pageView, $title, $globalTweets = null, $userData = null, $searchedUsers = null): PageContent
    {
        ob_start();
        require_once __DIR__ . '/../../Views/layouts/tweetPostForm.svgs.php';
        $tweetPostFormSvgs = ob_get_clean();

        ob_start();
        require_once __DIR__ . '/../../Views/layouts/leftSidebar.tpl.php';
        $leftSidebar = ob_get_clean();

        ob_start();
        require_once __DIR__ . '/../../Views/layouts/globalTweetsFeed.tpl.php';
        $globalTweetsFeed = ob_get_clean();

        ob_start();
        require_once __DIR__ . '/../../Views/layouts/searchedUsersList.tpl.php';
        $searchedUsersList = ob_get_clean();

        ob_start();
        require_once __DIR__ . '/../../Views/layouts/rightSidebar.tpl.php';
        $rightSidebar = ob_get_clean();

        ob_start();
        require_once __DIR__ . '/../../Views/pages/' . $pageView;
        $pageContent = ob_get_clean();

        return new self($pageContent, $title, $globalTweets, $userData, $searchedUsers);
    }

    public function render($pageContent)
    {
        ob_start();
        echo $pageContent;
        $pageContent = ob_get_contents();
        ob_end_clean();

        require_once __DIR__ . '/../layouts/page.tpl.php';
    }

    public function getContent()
    {
        return $this->content;
    }

}