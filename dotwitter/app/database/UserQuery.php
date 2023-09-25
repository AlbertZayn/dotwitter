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
}

