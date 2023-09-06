<?php

namespace dotwitter\app\Models;
use dotwitter\app\database\ConnectToDatabase;
use PDO;

class TweetsModel
{
    public function createTweet($userId, $text)
    {
        try {
            $db = ConnectToDatabase::connect($config);

            $stmt = $db->prepare("INSERT INTO `tweet` (`text`, `user`) VALUES (:text, :user)");
            $stmt->bindParam(':text', $text, PDO::PARAM_STR);
            $stmt->bindParam(':user', $userId, PDO::PARAM_INT);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            // Обработка ошибок
            return false;
        }
    }
}
