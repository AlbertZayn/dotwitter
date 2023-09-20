<?php

namespace dotwitter\app\database;

use PDO;

class TweetQuery
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function createTweet($userId, $text, $fullname, $username)
    {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO `tweet` (`text`, `user`, `full_name`, `username`) VALUES (:text, :user, :fullname, :username)");
            $stmt->bindParam(':text', $text, PDO::PARAM_STR);
            $stmt->bindParam(':user', $userId, PDO::PARAM_INT);
            $stmt->bindParam(':fullname', $fullname, PDO::PARAM_STR);
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            // Обработка ошибок
            return false;
        }
    }

    public function getAllTweets()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM `tweet` ORDER BY `id` DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function tweetsByKeyword($keyword)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM 'tweet' WHERE LOWER(`text`) LIKE :keyword ORDER BY `id` DESC");
        $keyword = '%' . strtolower($keyword) . '%';
        $stmt->bindParam(':keyword', $keyword, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

