<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Models\TweetsModel;
use dotwitter\app\Models\UserModel;
use dotwitter\app\Views\layers\PageContent;

class HomePageController extends SessionController
{
    public static function getPage()
    {
        self::checkAuthorization();

        $title = 'Home / dotwitter';
        $searchedUsers = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userModel = new UserModel();
            $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';

            if (!empty($keyword)) {
                $searchedUsers = $userModel->getUsersByKeyword($keyword);
            }
        }

        $tweetsModel = new TweetsModel();
        $globalTweets = $tweetsModel->getAllTweets();
        $page = PageContent::dynamicDataPage('home.php', $title, $globalTweets, $searchedUsers);
        $page->render($page->getContent());
    }
}
