<?php

namespace dotwitter\app\Controllers;
class RegisterController
{
    public function register()
    {
        $bootController = new BootController();

        $stmt = $bootController->pdo()->prepare("SELECT * FROM `user` WHERE `username` = :username");
        $stmt->execute(['username' => $_POST['username']]);

        if ($stmt->rowCount() > 0) {
            $flashMessage = 'Это имя пользователя уже занято.';
        } else {
            $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt = $bootController->pdo()->prepare(
                "INSERT INTO `user` (`full_name`, `email`,  `username`, `password`) 
                 VALUES (:fullname, :email, :username, :password)"
            );

            var_dump(password_hash($_POST['password'], PASSWORD_DEFAULT));

            $stmt->execute([
                'fullname' => $_POST['fullname'],
                'email' => $_POST['email'],
                'username' => $_POST['username'],
                'password' => $hashedPassword,
            ]);
            header('Location: /');
            exit;
        }

        $flashMessage = $flashMessage ?? 'Произошла ошибка при регистрации.';
        $_SESSION['flash'] = $flashMessage;
        header('Location: /');
        exit;
    }
}

$registerController = new RegisterController();
$registerController->register();

error_reporting(E_ALL);
ini_set('display_errors', 1);
