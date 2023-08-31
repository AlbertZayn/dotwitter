<?php

namespace dotwitter\app\Controllers;
use PDO;
class BootController
{
    public function initSession()
    {
        session_start();
    }
    public function pdo()
    {
        static $pdo;

        if (!$pdo) {
            $config = include __DIR__ . '/../../public/config.php';
            $dsn = 'mysql:dbname=' . $config['db_name'] . ';host=' . $config['db_host'];
            $pdo = new PDO($dsn, $config['db_user'], $config['db_pass']);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return $pdo;
    }

    public function flash($message = null)
    {
        if ($message) {
            $_SESSION['flash'] = $message;
        } else {
            if (!empty($_SESSION['flash'])) {
                $flashMessage = $_SESSION['flash'];
                unset($_SESSION['flash']);
                return $flashMessage;
            }
        }
        return null;
    }

    public function check_auth(): bool
    {
        return !!($_SESSION['user_id'] ?? false);
    }
}

$bootController = new BootController();
$bootController->initSession();