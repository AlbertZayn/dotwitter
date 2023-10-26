<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Models\Tweet;
use dotwitter\app\Models\User;
use dotwitter\app\Views\layers\PageContent;
use Exception;

class ProfilePageController extends SessionController
{
    public static function getUserTweets($globalTweets, $authorizedUserId)
    {
        return array_filter($globalTweets, function ($tweet) use ($authorizedUserId) {
            return $tweet['user'] === $authorizedUserId;
        });
    }

    public static function extractUsernameFromURL($url)
    {
        if (preg_match('/\/profile\/([a-zA-Z0-9_]+)/', $url, $matches)) {
            return $matches[1];
        }
    }

    public static function getPage()
    {
        self::checkAuthorization();

        $_POST = json_decode(file_get_contents("php://input"), true);
        $searchedUsers = [];

        try {
            $keyword = $POST['keyword'] ?? '';
            $userModel = new User();

            if (!$keyword) {
                if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                    echo json_encode(["success" => true, "keyword" => $keyword, "users" => $searchedUsers]);
                }
                $searchedUsers = $userModel->getUsersByKeyword($keyword);
            } else {
                $searchedUsers = $userModel->getAllUsers();
            }
        } catch (Exception $e) {
            if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                echo json_encode(["success" => false, "message" => $e->getMessage()]);
            }
        }

        $url = $_SERVER['REQUEST_URI'];
        $username = self::extractUsernameFromURL($url);

        if ($url === '/profile/([a-zA-Z0-9_]+)') {
            $userModel = new User();
            $usersPages = $userModel->findByUsername($username);

            $title = 'Profile / ' . $usersPages['username'];
            $tweetsModel = new Tweet();
            $globalTweets = $tweetsModel->getAllTweets();
            $authorizedUserId = $usersPages['id'];
            $userTweets = self::getUserTweets($globalTweets, $authorizedUserId);
            $userModel = new User();
            $userData = $userModel->findByUsername($username);
        } else {
            $authorizedUserId = $_SESSION['user_data']['id'];
            $userModel = new User();
            $userData = $userModel->findByUsername($_SESSION['user_data']['username']);
            $title = 'Profile / dotwitter';
            $tweetsModel = new Tweet();
            $globalTweets = $tweetsModel->getAllTweets();
            $userTweets = self::getUserTweets($globalTweets, $authorizedUserId);
        }

        $page = PageContent::dynamicDataPage('profile.php', $title, $userTweets, $userData, $searchedUsers, $usersPages);
        $page->render($page->getContent());
    }

}
