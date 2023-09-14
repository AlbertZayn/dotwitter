<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Views\layers\PageContent;

class ExplorePageController
{
    public static function getPage()
    {
        $title = 'Explore / dotwitter';
        $page = PageContent::dynamicDataPage('explore.php', $title);
        $page->render($page->getContent());
    }
}