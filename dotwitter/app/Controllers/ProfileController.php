<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Views\Recycles\PageContent;
use PDO;

class ProfileController
{
    public static function getPage()
    {

        $title = 'Profile / dotwitter';
        $page = PageContent::clipboardContent('profile.php', $title);
        extract([
            'userFullname' => $userFullname,
            'userUsername' => $userUsername,
        ]);

        $page->render($page->getContent());

        if (!isset($_SESSION['user_id'])) {
            header('Location: /profile');
            exit;
        }

        $bootController = new BootController();
        $userId = $_SESSION['user_id'];

        $stmt = $bootController->pdo()->prepare("SELECT full_name, username FROM user WHERE id = :id");
        $stmt->execute(['id' => $userId]);

        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        $userFullname = $userData['full_name'];
        $userUsername = $userData['username'];


    }
}