<?php

namespace dotwitter\app\Models;

use dotwitter\app\database\ConnectToDatabase;
use dotwitter\app\database\UserRepository;

class User
{
    public $id;
    public $full_name;
    public $email;
    public $username;
    public $password;
    public $tweet;
    public $follows;
    public $followers;
    public $posts;
    public $registrationdate;
    public $role;
    public $access;

    protected $pdo;
    protected $userRepo;
    public function __construct()
    {
        $config = require __DIR__ . '/../database/config.php';
        $this->pdo = ConnectToDatabase::connect($config);
        $this->userRepo = new UserRepository($this->pdo);
    }

    public function findByUsername($username)
    {
        $userData = $this->userRepo->findByUsername($username);
        if ($userData) {
            $this->id = $userData['id'];
            $this->full_name = $userData['full_name'];
            $this->email = $userData['email'];
            $this->username = $userData['username'];
            $this->password = $userData['password'];
            $this->tweet = $userData['tweet'];
            $this->follows = $userData['follows'];
            $this->followers = $userData['followers'];
            $this->posts = $userData['posts'];
            $this->registrationdate = $userData['registrationdate'];
            $this->role = $userData['role'];
            $this->access = $userData['access'];
        }
        return $userData;
    }

    public function getAllUsers()
    {
        return $this->userRepo->getAllUsers();
    }

    public function getUsersByKeyword($keyword)
    {
        return $this->userRepo->getUsersByKeyword($keyword);
    }

    public function createUser($fullname, $email, $username, $password)
    {
        $result = $this->userRepo->createUser($fullname, $email, $username, $password);
        if ($result) {
            $this->full_name = $fullname;
            $this->email = $email;
            $this->username = $username;
            $this->password = password_hash($password, PASSWORD_DEFAULT);
        }
        return $result;
    }

    public function blockUser($tweetUserId)
    {
        return $this->userRepo->blockUser($tweetUserId);
    }

    public function deleteUser($userId)
    {
        return $this->userRepo->deleteUser($userId);
    }
}