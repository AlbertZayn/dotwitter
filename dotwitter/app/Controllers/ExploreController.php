<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Views\Recycles\PageContent;

class ExploreController
{
    public static function getPage()
    {
        $title = 'Explore / dotwitter';
        $page = PageContent::DynamicDataPage('explore.php', $title);
        $page->render($page->getContent());
    }
}