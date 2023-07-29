<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Views\PageContent;

class ProfileController
{
    public static function getPage()
    {
        ob_start();
        require_once __DIR__ . '/../Views/profile.php';
        $ProfilePageContent = ob_get_contents();
        ob_clean();
        $title = 'Profile / dotwitter';

        $page = new PageContent($ProfilePageContent, $title);
        $page->render();
    }
}