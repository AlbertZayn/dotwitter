<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Models\TweetsModel;
use dotwitter\app\Views\layers\PageContent;

class ExplorePageController
{
    public static function getPage()
    {
        $title = 'Explore / dotwitter';
        $tweetsModel = new TweetsModel();

        if (isset($_POST['search_keyword']) && !empty($_POST['search_keyword'])) {
            $keyword = $_POST['search_keyword'];
            $globalTweets = $tweetsModel->tweetsByKeyword($keyword);
        }
        else {
            $globalTweets = $tweetsModel->getAllTweets();
        }

        $page = PageContent::dynamicDataPage('explore.php', $title, $globalTweets);
        $page->render($page->getContent());
    }

}