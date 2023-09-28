<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Models\UserModel;

class LoginController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $userModel = new UserModel();
            $user = $userModel->findByUsername($username);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_data'] = [
                    'id' => $user['id'],
                    'full_name' => $user['full_name'],
                    'username' => $user['username'],
                    'role' => $user['role'],
                    'access' => $user['access']
                ];

                header('Location: /profile');
                exit;
            } else {
                $_SESSION['flash'] = 'Пароль неверен или пользователь не найден.';
            }
        }
        header('Location: /');
        exit;
    }

    public function logout()
    {
        session_destroy();
        header('location: /');
        exit;
    }
}