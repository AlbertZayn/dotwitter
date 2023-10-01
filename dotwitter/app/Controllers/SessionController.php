<?php

namespace dotwitter\app\Controllers;

class SessionController {

    public static function checkAuthorization() {
        if(!isset($_SESSION['user_data'])) {
            header('Location: /');
            exit;
        }
    }

    public static function checkAdminRole() {
        if(($_SESSION['user_data']['role'] !== 'admin')) {
            header('Location: /');
            exit;
        }
    }

}