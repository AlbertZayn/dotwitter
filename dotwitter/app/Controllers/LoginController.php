<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Models\User;

class LoginController
{
    public function login()
    {
        $_POST = json_decode(file_get_contents("php://input"), true);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $userModel = new User();
            $user = $userModel->findByUsername($username);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_data'] = [
                    'id' => $user['id'],
                    'full_name' => $user['full_name'],
                    'username' => $user['username'],
                    'role' => $user['role'],
                    'access' => $user['access'],
                    'registrationdate' => $user['registrationdate'],
                    'follows' => $user['follows'],
                    'followers' => $user['followers'],
                    'posts' => $user['posts']
                ];

                http_response_code(200);
                exit;
            } else {
                http_response_code(401);
            }
        }
    }

    public function logout()
    {
        session_destroy();
        header('location: /');
        exit;
    }
}