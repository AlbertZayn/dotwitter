<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Views\layers\PageContent;

class MainPageController
{
    public static function getPage()
    {
        $title = 'Main / dotwitter';
        $page = PageContent::dynamicDataPage('main.php', $title);
        $page->render($page->getContent());
    }
}