<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Models\TweetsModel;
use dotwitter\app\Models\UserModel;
use dotwitter\app\Views\layers\PageContent;
use Exception;

class HomePageController extends SessionController
{
    public static function getPage()
    {
        $_POST = json_decode(file_get_contents("php://input"), true);

        self::checkAuthorization();

        $searchedUsers = [];
        try {
            $keyword = $_POST['keyword'] ?? '';
            $userModel = new UserModel();

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

        $tweetsModel = new TweetsModel();
        $globalTweets = $tweetsModel->getAllTweets();
        $title = 'Home / dotwitter';
        $page = PageContent::dynamicDataPage('home.php', $title, $globalTweets, '', $searchedUsers);
        $page->render($page->getContent());
    }
}