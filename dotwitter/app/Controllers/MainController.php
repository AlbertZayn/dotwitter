<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Views\PageContent;

class MainController
{
    public static function getPage()
    {
        ob_start();
        require_once __DIR__ . '/../Views/main.php';
        $MainPageContent = ob_get_contents();
        ob_clean();
        $title = 'Main / dotwitter';

        $page = new PageContent($MainPageContent, $title);
        $page->render();
    }
}