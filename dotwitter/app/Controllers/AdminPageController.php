<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Models\TweetsModel;
use dotwitter\app\Models\UserModel;
use dotwitter\app\Views\layers\TweetsFeedView;

class AdminPageController extends SessionController
{
    public static function getAdminTweets($adminTweets, $authorizedUserId)
    {
        return array_filter($adminTweets, function ($tweet) use ($authorizedUserId) {
            return $tweet['user'] !== $authorizedUserId;
        });
    }

    public static function deleteTweet()
    {
        if (isset($_POST['tweet_id'])) {
            $tweetId = $_POST['tweet_id'];
            $tweetsModel = new TweetsModel();
            $success = $tweetsModel->deleteTweet($tweetId);
            if ($success) {
                header("Location: /admin");
            } else {
                // Ошибка при удалении твита
                echo "Error deleting tweet";
            }
        }
    }

    public static function blockUser()
    {
        $tweetUserId = $_POST['tweet_user'];
        $userModel = new UserModel();
        $success = $userModel->blockUser($tweetUserId);

        if ($success) {
            header("Location: /admin");
        } else {
            echo "Error of blocking user";
        }
    }

    public static function deleteUser()
    {
        $userId = $_POST['delete_user'];
        $userModel = new UserModel();
        $success = $userModel->deleteUser($userId);

        if ($success) {
            header("Location: /admin");
        } else {
            echo "Error of deleting user";
        }
    }

    public static function getPage()
    {
        self::checkAuthorization();
        self::checkAdminRole();

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
        $page->render($page->getAdminContent());
    }
}