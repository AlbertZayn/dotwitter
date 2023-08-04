<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Views\Recycles\PageContent;

class HomeController
{
    public static function getPage()
    {
        $pageContent = app('PageContent');

        ob_start();
        require_once __DIR__ . '/../Views/home.php';
        $HomePageContent = ob_get_contents();
        ob_clean();
        $title = 'Home / dotwitter';

        $page = new PageContent($HomePageContent, $title);
        $page->render();
    }
}