<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Views\Recycles\PageContent;

class ProfileController
{
    public static function getPage()
    {
        $title = 'Profile / dotwitter';
        $page = PageContent::clipboardContent('home.php', $title);
        $page->render($page->getContent());
    }
}