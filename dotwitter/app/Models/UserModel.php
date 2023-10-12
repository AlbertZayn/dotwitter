<?php

namespace dotwitter\app\Models;

use dotwitter\app\database\ConnectToDatabase;
use dotwitter\app\database\UserQuery;

class UserModel
{
    protected $pdo;
    protected $userQuery;
    public function __construct()
    {
        $config = require __DIR__ . '/../database/config.php';
        $this->pdo = ConnectToDatabase::connect($config);
        $this->userQuery = new UserQuery($this->pdo);
    }

    public function findByUsername($username)
    {
        return $this->userQuery->findByUsername($username);
    }

    public function getUsersByKeyword($keyword)
    {
        return $this->userQuery->getUsersByKeyword($keyword);
    }


    
    public function createUser($fullname, $email, $username, $password)
    {
        return $this->userQuery->createUser($fullname, $email, $username, $password);
    }

    public function blockUser($tweetUserId)
    {
        return $this->userQuery->blockUser($tweetUserId);
    }

    public function deleteUser($userId)
    {
        return $this->userQuery->deleteUser($userId);
    }
}