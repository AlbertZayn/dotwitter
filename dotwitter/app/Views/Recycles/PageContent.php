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

    public function render()
    {
        ob_start();
        echo $this->content;
        $pageContent = ob_get_contents();
        ob_end_clean();

        require_once __DIR__ . '/../page.php';
    }
}
