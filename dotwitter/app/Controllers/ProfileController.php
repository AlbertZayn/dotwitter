<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Views\Recycles\PageContent;

class ProfileController
{
    public static function getPage()
    {
        $pageContent = app('PageContent');

        ob_start();
        require_once __DIR__ . '/../Views/left-sidebar.php';
        $leftSidebarContent = ob_get_clean();

        ob_start();
        require_once __DIR__ . '/../Views/profile.php';
        $ProfilePageContent = ob_get_contents();
        ob_clean();
        $title = 'Profile / dotwitter';

        $page = new PageContent($ProfilePageContent, $title);
        $page->render();
    }
}