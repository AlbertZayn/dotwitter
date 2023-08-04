<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Views\Recycles\PageContent;

class MainController
{
    public static function getPage()
    {
        $pageContent = app('PageContent');

        ob_start();
        require_once __DIR__ . '/../Views/main.php';
        $MainPageContent = ob_get_contents();
        ob_clean();
        $title = 'Main / dotwitter';

        $page = new PageContent($MainPageContent, $title);
        $page->render();
    }
}