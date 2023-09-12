<?php

namespace dotwitter\app\Models;
use dotwitter\app\database\ConnectToDatabase;
use PDO;

class TweetsModel
{
    public function __construct()
    {
        $config = require_once __DIR__ . '/../database/config.php';
        $this->pdo = ConnectToDatabase::connect($config);
    }
    protected $pdo;
    public function createTweet($userId, $text, $fullname, $username)
    {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO `tweet` (`text`, `user`, `full_name`, `username`) VALUES (:text, :user, :fullname, :username)");
            $stmt->bindParam(':text', $text, PDO::PARAM_STR);
            $stmt->bindParam(':user', $userId, PDO::PARAM_INT);
            $stmt->bindParam(':fullname', $fullname, PDO::PARAM_STR);
            $stmt->bindParam(':username', $username, PDO::PARAM_INT);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            // Обработка ошибок
            return false;
        }
    }

    public function getTweets()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM `tweet` ORDER BY `id` DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}