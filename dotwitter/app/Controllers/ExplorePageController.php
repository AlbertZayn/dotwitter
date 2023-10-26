<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Models\Tweet;
use dotwitter\app\Views\layers\PageContent;

class ExplorePageController
{
    public static function getPage()
    {
        $tweetsModel = new Tweet();

        if (!empty($_POST['search_keyword'])) {
            $keyword = $_POST['search_keyword'];
            $globalTweets = $tweetsModel->getTweetsByKeyword($keyword);
        }
        else {
            $globalTweets = $tweetsModel->getAllTweets();
        }

        $title = 'Explore / dotwitter';
        $page = PageContent::dynamicDataPage('explore.php', $title, $globalTweets, '', '');
        $page->render($page->getContent());
    }
}