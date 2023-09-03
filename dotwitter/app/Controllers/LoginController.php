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
                $_SESSION['user_id'] = $user['id'];
                $userData = $userModel->getUserData($user['id']);
                $_SESSION['user_data'] = $userData;

                header('Location: /profile');
                exit;
            } else {
                $_SESSION['flash'] = 'Пароль неверен или пользователь не найден.';
            }
        }
        header('Location: /');
        exit;
    }

    function logout()
    {
        session_destroy();
        header('location: index.php');
        exit;
    }
}

$loginController = new LoginController();
$loginController->login();