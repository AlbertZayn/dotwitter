<?php

//namespace dotwitter\app\Controllers;
//class LoginController
//{
//    public function login()
//    {
//        $bootController = new BootController();
//
//        $stmt = $bootController->pdo()->prepare("SELECT * FROM `user` WHERE `username` = :username");
//        $stmt->execute(['username' => $_POST['username']]);
//
//        if ($stmt->rowCount()) {
//            $user = $stmt->fetch(PDO::FETCH_ASSOC);
//            if (password_verify($_POST['password'], $user['password'])) {
//                $_SESSION['user_id'] = $user['id'];
//                header('Location: /');
//                exit;
//            }
//        }
//
//        $flashMessage = 'Пароль неверен или пользователь не найден.';
//        $_SESSION['flash'] = $flashMessage;
//        header('Location: /');
//        exit;
//    }
//}
//
//$loginController = new LoginController();
//$loginController->login();