<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Models\Tweet;

class TweetPostController
{
    public function postTweet()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($_SESSION['user_data']['access'] !== 'blocked') {
                if (isset($_POST['tweet_text']) && !empty($_POST['tweet_text'])) {
                    if (isset($_SESSION['user_data']['id'])) {
                        $userId = $_SESSION['user_data']['id'];
                        $tweetText = $_POST['tweet_text'];
                        $fullname = $_SESSION['user_data']['full_name'];

                        $tweetsModel = new Tweet();
                        $result = $tweetsModel->createTweet($userId, $tweetText, $fullname);

                        if ($result) {
                            header("Location: /home");
                        } else {
                            // Ошибка при создании твита
                            echo "Error creating tweet";
                        }
                    } else {
                        // Пользователь не авторизован
                        echo "User is not logged in";
                    }
                } else {
                    // Пользователь не ввел текст твита
                    echo "Invalid request";
                }
            } else {
                // Пользователь заблокирован
                echo "You have been blocked";
            }
        }
    }
}