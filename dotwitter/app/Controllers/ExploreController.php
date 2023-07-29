<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Views\PageContent;

class ExploreController
{
    public static function getPage()
    {
        ob_start();
        require_once __DIR__ . '/../Views/explore.php';
        $ExplorePageContent = ob_get_contents();
        ob_clean();
        $title = 'Explore / dotwitter';

        $page = new PageContent($ExplorePageContent, $title);
        $page->render();
    }
}
