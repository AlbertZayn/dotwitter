<?php

namespace dotwitter\app\Controllers;

use dotwitter\app\Views\Recycles\PageContent;

class AnonExpController
{
    public static function getPage()
    {
        $title = 'Explore as anonym / dotwitter';
        $page = PageContent::clipboardContent('anon-explore.php', $title);
        $page->render($page->getContent());
    }
}