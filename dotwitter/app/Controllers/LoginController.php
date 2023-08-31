<?php

namespace dotwitter\app\Controllers;
use PDO;
class LoginController
{
    public function login()
    {
        $bootController = new BootController();

        $stmt = $bootController->pdo()->prepare("SELECT * FROM `user` WHERE `username` = :username");
        $stmt->execute(['username' => $_POST['username']]);

        var_dump($stmt->queryString);
        var_dump($stmt->errorInfo());

        if ($stmt->rowCount()) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($_POST['password'], $user['password'])) {
                $_SESSION['user_id'] = $user['id'];

                var_dump($_SESSION);

                header('Location: /profile');
                exit;
            }
        }

        $flashMessage = 'Пароль неверен или пользователь не найден.';
        $_SESSION['flash'] = $flashMessage;

        var_dump($flashMessage);
        header('Location: /login');
        exit;
    }
}

$loginController = new LoginController();
$loginController->login();