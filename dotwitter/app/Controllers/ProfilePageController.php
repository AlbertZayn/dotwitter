<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Views\layers\PageContent;

class ProfilePageController
{
    public static function getPage()
    {
        $title = 'Profile / dotwitter';
        $page = PageContent::dynamicDataPage('profile.php', $title);
        $page->render($page->getContent());
    }
}