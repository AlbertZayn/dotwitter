<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Models\UserModel;

class RegisterController
{
    public function register()
    {
        $userModel = new UserModel();

        $existingUser = $userModel->findByUsername($_POST['username']);

        if ($existingUser) {
            $flashMessage = 'Это имя пользователя уже занято.';
        } else {
            $created = $userModel->createUser($_POST['fullname'], $_POST['email'], $_POST['username'], $_POST['password']);
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
