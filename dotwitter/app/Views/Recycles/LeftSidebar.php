<?php

namespace dotwitter\app\Views\Recycles;

class LeftSidebar
{
    private $content;


    public function __construct($content)
    {
        $this->content = $content;
    }

    public function render()
    {
        ob_start();
        echo $this->content;
        $leftSidebar = ob_get_contents();
        ob_end_clean();

        require_once __DIR__ . '/../left-sidebar.php.php';
    }
}
