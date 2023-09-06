<?php

namespace dotwitter\app\Controllers;
use dotwitter\app\Models\TweetsModel;

class TweetsController
{
    public function postTweet()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['tweet_text']) && !empty($_POST['tweet_text'])) {
                $userId = $_SESSION['user_data']['id'];
                $tweetText = $_POST['tweet_text'];

                $tweetsModel = new TweetsModel();
                $result = $tweetsModel->createTweet($userId, $tweetText);

                if ($result) {
                    // Твит создан
                    // Можете перенаправить пользователя или выполнить другие действия
                } else {
                    // Ошибка при создании твита
                    // Отображение сообщения пользователю
                }
            } else {
                // Пользователь не ввел текст твита
                // Отображение сообщения пользователю
            }
        }
    }
}

$TweetsController = new TweetsController();
$TweetsController->postTweet();