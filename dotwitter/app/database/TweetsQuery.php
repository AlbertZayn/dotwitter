<?php

namespace dotwitter\app\database;

use PDO;

class TweetsQuery
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
        $stmt = $this->pdo->prepare("SELECT * FROM `tweet` WHERE LOWER(`text`) LIKE :keyword ORDER BY `id` DESC");
        $keyword = '%' . strtolower($keyword) . '%';
        $stmt->bindParam(':keyword', $keyword, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteTweet($tweetId)
    {
        $stmt = $this->pdo->prepare("DELETE FROM `tweet` WHERE `id` = :tweet_id");
        $stmt->bindParam(':tweet_id', $tweetId, PDO::PARAM_INT);
        $stmt->execute();
        return true;
    }

    public function likeTweet($tweetId, $liked)
    {
        try {
            $stmt = $this->pdo->prepare("UPDATE `tweet` SET `likes` = CASE WHEN :liked = 1 THEN `likes` + 1 ELSE `likes` - 1 END WHERE `id` = :tweetId");
            $stmt->bindParam(':tweetId', $tweetId, PDO::PARAM_INT);
            $stmt->bindParam(':liked', $liked, PDO::PARAM_INT);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            // Handle database error
            return false;
        }
    }

}

