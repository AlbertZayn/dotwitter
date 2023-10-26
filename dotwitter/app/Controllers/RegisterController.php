<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Models\User;

class RegisterController
{
    public function register()
    {
        $userModel = new User();

        $existingUser = $userModel->findByUsername($_POST['username']);
        $username = trim($_POST['username']);

        if ($existingUser) {
            $flashMessage = 'Это имя пользователя уже занято.';
        } else if (empty($username)) {
            $flashMessage = 'Имя пользователя не может состоять только из пробелов.';
        } else {
            $created = $userModel->createUser(trim($_POST['fullname']), trim($_POST['email']), trim($_POST['username']), trim($_POST['password']));
            if ($created) {
                header('Location: /');
                exit;
            } else {
                $flashMessage = 'Произошла ошибка при регистрации.';
            }
        }

        $flashMessage = $flashMessage ?? 'Произошла ошибка при регистрации.';
        $_SESSION['flash'] = $flashMessage;
        header('Location: /');
        exit;
    }
}

$registerController = new RegisterController();
$registerController->register();