<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Views\Recycles\PageContent;
use PDO;

class ProfileController
{
    public static function getPage()
    {
        $title = 'Profile / dotwitter';
        $page = PageContent::clipboardContent('profile.php', $title);
        $page->render($page->getContent());
    }
}