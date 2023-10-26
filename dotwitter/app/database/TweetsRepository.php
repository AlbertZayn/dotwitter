<?php

namespace dotwitter\app\database;

use PDO;
use PDOException;

class TweetsRepository
{

    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function createTweet($userId, $text, $fullname, $username): bool
    {
        try {
            $insertStmt = $this->pdo->prepare("INSERT INTO `tweet` (`text`, `user`, `full_name`, `username`) VALUES (:text, :user, :fullname, :username)");
            $updateStmt = $this->pdo->prepare("UPDATE `user` SET `posts` = `posts` + 1 WHERE `id` = :user");

            $insertStmt->bindParam(':text', $text, PDO::PARAM_STR);
            $insertStmt->bindParam(':user', $userId, PDO::PARAM_INT);
            $insertStmt->bindParam(':fullname', $fullname, PDO::PARAM_STR);
            $insertStmt->bindParam(':username', $username, PDO::PARAM_STR);

            $insertStmt->execute();
            $updateStmt->bindParam(':user', $userId, PDO::PARAM_INT);
            $updateStmt->execute();

            return true;
        } catch (PDOException $e) {
            // Handle errors
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

    public function checkTweetLike($userId, $tweetId)
    {
        $stmt = $this->pdo->prepare("SELECT 1 FROM `tweet_likes` WHERE `user_id` = :user_id AND `tweet_id` = :tweet_id");
        $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $stmt->bindParam(':tweet_id', $tweetId, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_COLUMN) !== false;
    }

    public function getTweetLikesCount($tweetId)
    {
        $stmt = $this->pdo->prepare("SELECT `likes` FROM `tweet` WHERE `id` = :tweet_id");
        $stmt->bindParam(':tweet_id', $tweetId, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result["likes"];
    }

    public function likeTweet($tweetId, $userId)
    {
        $this->pdo->beginTransaction();

        try {
            if (!$this->checkTweetLike($userId, $tweetId)) {
                $stmt = $this->pdo->prepare("INSERT INTO `tweet_likes` (`user_id`, `tweet_id`) VALUES (:user_id, :tweet_id)");
                $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
                $stmt->bindParam(':tweet_id', $tweetId, PDO::PARAM_INT);
                $stmt->execute();

                $stmt = $this->pdo->prepare("UPDATE `tweet` SET `likes` = `likes` + 1 WHERE `id` = :tweet_id");
                $stmt->bindParam(':tweet_id', $tweetId, PDO::PARAM_INT);
                $stmt->execute();
            }
            $this->pdo->commit();

            return $this->getTweetLikesCount($tweetId);
        } catch (PDOException $e) {
            $this->pdo->rollBack();
            throw $e;
        }
    }

    public function unlikeTweet($tweetId, $userId)
    {
        $this->pdo->beginTransaction();

        try {
            if ($this->checkTweetLike($userId, $tweetId)) {
                $stmt = $this->pdo->prepare("DELETE FROM `tweet_likes` WHERE `user_id` = :user_id AND `tweet_id` = :tweet_id");
                $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
                $stmt->bindParam(':tweet_id', $tweetId, PDO::PARAM_INT);
                $stmt->execute();

                $stmt = $this->pdo->prepare("UPDATE `tweet` SET `likes` = `likes` - 1 WHERE `id` = :tweet_id");
                $stmt->bindParam(':tweet_id', $tweetId, PDO::PARAM_INT);
                $stmt->execute();
            }
            $this->pdo->commit();

            return $this->getTweetLikesCount($tweetId);
        } catch (PDOException $e) {
            $this->pdo->rollBack();
            throw $e;
        }
    }
}