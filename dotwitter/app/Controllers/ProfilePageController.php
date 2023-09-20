<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Models\TweetsModel;
use dotwitter\app\Views\layers\PageContent;

class ProfilePageController
{
    public static function getUserTweets($globalTweets, $authorizedUserId)
    {
        return array_filter($globalTweets, function ($tweet) use ($authorizedUserId) {
            return $tweet['user'] === $authorizedUserId;
        });
    }

    public static function getPage()
    {
        $title = 'Profile / dotwitter';
        $tweetsModel = new TweetsModel();
        $globalTweets = $tweetsModel->getAllTweets();

        $authorizedUserId = $_SESSION['user_data']['id'];
        $userTweets = self::getUserTweets($globalTweets, $authorizedUserId);

        $page = PageContent::dynamicDataPage('profile.php', $title, $userTweets);
        $page->render($page->getContent());
    }
}

