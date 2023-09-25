<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Models\TweetsModel;
use dotwitter\app\Views\layers\TweetsFeedView;

class AdminPageController
{
    public static function getAdminTweets($adminTweets, $authorizedUserId)
    {
        return array_filter($adminTweets, function ($tweet) use ($authorizedUserId) {
            return $tweet['user'] !== $authorizedUserId;
        });
    }

    public static function getPage()
     {
        $tweetsModel = new TweetsModel();
        $authorizedUserId = $_SESSION['user_data']['id'];

        if (isset($_POST['search_keyword']) && !empty($_POST['search_keyword'])) {
            $keyword = $_POST['search_keyword'];

            $adminTweets = $tweetsModel->tweetsByKeyword($keyword);
        }
        else {
            $adminTweets = $tweetsModel->getAllTweets();
        }

        $filteredTweets = self::getAdminTweets($adminTweets, $authorizedUserId);
        $title = 'Admin Panel / dotwitter';
        $page = TweetsFeedView::adminDataPage('admin.php', $title, $filteredTweets);
        $page->render($page->getContent());
    }
}