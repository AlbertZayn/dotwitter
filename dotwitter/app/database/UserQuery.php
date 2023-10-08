<?php

namespace dotwitter\app\database;

use PDO;

class UserQuery
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findByUsername($username)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM `user` WHERE `username` = :username");
        $stmt->execute(['username' => $username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getUsersByKeyword($keyword)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM `user` WHERE LOWER(`text`) LIKE :keyword ORDER BY `id` DESC");
        $keyword = '%' . strtolower($keyword) . '%';
        $stmt->bindParam(':keyword', $keyword, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createUser($fullname, $email, $username, $password)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = ($this->pdo->prepare("INSERT INTO `user` (`full_name`, `email`,  `username`, `password`) 
             VALUES (:fullname, :email, :username, :password)")
        );
        return $stmt->execute([
            'fullname' => $fullname,
            'email' => $email,
            'username' => $username,
            'password' => $hashedPassword,
        ]);
    }

    public function blockUser($tweetUserId)
    {
        $stmt = $this->pdo->prepare("UPDATE `user` SET `access` = 'blocked' WHERE `id` = :tweet_user");
        $stmt->bindParam(':tweet_user', $tweetUserId, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function deleteUser($userId)
    {
        $stmt = $this->pdo->prepare("DELETE FROM `user` WHERE `id` = :tweet_user");
        $stmt->bindParam(':tweet_user', $userId, PDO::PARAM_INT);
        return $stmt->execute();
    }
}