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
        $config = require_once __DIR__ . '/../database/config.php';
        $this->pdo = ConnectToDatabase::connect($config);
        $this->userQuery = new UserQuery($this->pdo);
    }

    public function findByUsername($username)
    {
        return $this->userQuery->findByUsername($username);
    }

    public function createUser()
    {
        return $this->userQuery->createUser();
    }
}