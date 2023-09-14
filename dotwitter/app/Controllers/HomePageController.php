<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Views\layers\PageContent;

class HomePageController
{
    public static function getPage()
    {
        $title = 'Home / dotwitter';
        $page = PageContent::dynamicDataPage('home.php', $title);
        $page->render($page->getContent());
    }
}