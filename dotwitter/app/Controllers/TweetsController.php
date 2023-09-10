<?php

namespace dotwitter\app\Controllers;
use dotwitter\app\Models\TweetsModel;

class TweetsController
{
    public function postTweet()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['tweet_text']) && !empty($_POST['tweet_text'])) {
                // Retrieve the user ID from the session
                if (isset($_SESSION['user_data']['id'])) {
                    $userId = $_SESSION['user_data']['id'];
                    $tweetText = $_POST['tweet_text'];

                    $tweetsModel = new TweetsModel();
                    $result = $tweetsModel->createTweet($userId, $tweetText);

                    if ($result) {
                        header("Location: /home");
                    } else {
                        // Ошибка при создании твита
                        // Отображение сообщения пользователю
                        echo "Error creating tweet.";
                    }
                } else {
                    // User is not logged in
                    // Handle this case (e.g., redirect to the login page)
                    echo "User is not logged in.";
                }
            } else {
                // Пользователь не ввел текст твита
                // Отображение сообщения пользователю
                echo "Invalid request.";
            }
        }
    }
}