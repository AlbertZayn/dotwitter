<?php

namespace dotwitter\app\Views\Recycles;

class PageContent
{
    private $content;
    private $title;

    public function __construct($content, $title)
    {
        $this->content = $content;
        $this->title = $title;
    }

    public static function DynamicDataPage($pageView, $title)
    {
        ob_start();
        require_once __DIR__ . '/../../Views/left-sidebar.php';
        $leftSidebarContent = ob_get_clean();

        ob_start();
        require_once __DIR__ . '/../../Views/' . $pageView;
        $pageContent = ob_get_clean();

        return new self($pageContent, $title);
    }

    public function render($pageContent)
    {
        ob_start();
        echo $pageContent;
        $pageContent = ob_get_contents();
        ob_end_clean();

        require_once __DIR__ . '/../page.php';
    }

    public function getContent()
    {
        return $this->content;
    }

}