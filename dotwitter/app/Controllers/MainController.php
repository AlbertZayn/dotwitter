<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Views\Recycles\PageContent;

class MainController
{
    public static function getPage()
    {
        $title = 'Main / dotwitter';
        $page = PageContent::DynamicDataPage('main.php', $title);
        $page->render($page->getContent());
    }
}