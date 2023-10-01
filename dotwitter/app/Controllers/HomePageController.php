<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Models\TweetsModel;
use dotwitter\app\Views\layers\PageContent;

class HomePageController extends SessionController
{
    public static function getPage()
    {
        self::checkAuthorization();

        $title = 'Home / dotwitter';
        $tweetsModel = new TweetsModel();
        $globalTweets = $tweetsModel->getAllTweets();
        $page = PageContent::dynamicDataPage('home.php', $title, $globalTweets);
        $page->render($page->getContent());
    }
}