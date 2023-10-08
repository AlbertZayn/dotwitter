<?php

namespace dotwitter\app\database;

use PDO;
use PDOException;

class TweetsQuery
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function createTweet($userId, $text, $fullname, $username): bool
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

    public function getTweetsByKeyword($keyword)
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

    public function getTweetLikesCount($tweetId)
    {
        $stmt = $this->pdo->prepare("SELECT `likes` FROM `tweet` WHERE `id` = :tweet_id");
        $stmt->bindParam(':tweet_id', $tweetId, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result["likes"];
    }

    public function likeTweet($tweetId)
    {
        try {
            $stmt = $this->pdo->prepare("UPDATE `tweet` SET `likes` = `likes` + 1, `liked_by_user` = 1 WHERE `id` = :tweet_id");
            $stmt->bindParam(':tweet_id', $tweetId, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function unlikeTweet($tweetId)
    {
        try {
            $stmt = $this->pdo->prepare("UPDATE `tweet` SET `likes` = `likes` - 1, `liked_by_user` = 0 WHERE `id` = :tweet_id");
            $stmt->bindParam(':tweet_id', $tweetId, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}