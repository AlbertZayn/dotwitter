<?php

namespace dotwitter\app\Views\layers;

class PageContent
{
    private $content;
    private $title;

    public function __construct($content, $title)
    {
        $this->content = $content;
        $this->title = $title;
    }

    public static function dynamicDataPage($pageView, $title): PageContent
    {
        ob_start();
        require_once __DIR__ . '/../../Views/layouts/tweetPostForm.svgs.php';
        $tweetPostFormSvgs = ob_get_clean();

        ob_start();
        require_once __DIR__ . '/../../Views/layouts/leftSidebar.tpl.php';
        $leftSidebar = ob_get_clean();

        ob_start();
        require_once __DIR__ . '/../../Views/layouts/tweetsFeed.tpl.php';
        $tweetsFeed = ob_get_clean();

        ob_start();
        require_once __DIR__ . '/../../Views/pages/' . $pageView;
        $pageContent = ob_get_clean();

        return new self($pageContent, $title);
    }

    public function render($pageContent)
    {
        ob_start();
        echo $pageContent;
        $pageContent = ob_get_contents();
        ob_end_clean();

        require_once __DIR__ . '/../layouts/page.tpl.php';
    }

    public function getContent()
    {
        return $this->content;
    }

}