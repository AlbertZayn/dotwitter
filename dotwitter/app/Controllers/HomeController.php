<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Views\Recycles\PageContent;

class HomeController
{
    public static function getPage()
    {
        $title = 'Home / dotwitter';
        $page = PageContent::DynamicDataPage('home.php', $title);
        $page->render($page->getContent());
    }
}