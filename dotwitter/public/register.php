<?php

require_once __DIR__ . '/boot.php';

$stmt = pdo()->prepare("SELECT * FROM `user` WHERE `username` = :username");
$stmt->execute(['username' => $_POST['username']]);
if ($stmt->rowCount() > 0) {
    flash('Это имя пользователя уже занято.');
    header('Location: /');
    die;
}

$stmt = pdo()->prepare("INSERT INTO `user` (`fullname`, `email`,  `username`, `password`) VALUES (:fullname, :email, :username, :password)");
$stmt->execute([
    'fullname' => $_POST['fullname'],
    'email' => $_POST['email'],
    'username' => $_POST['username'],
    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
]);

header('Location: index.php');





