<?php

spl_autoload_register(function ($className) {
    $baseNamespace = 'dotwitter\\';
    $baseDirectory = __DIR__ . '/';

    $className = ltrim($className, '\\');
    $fileName = '';
    $namespace = '';

    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName = '..' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'Core' . DIRECTORY_SEPARATOR . 'Router.php';
    }

    if (file_exists($fileName)) {
        require_once $fileName;
    } else {
        echo "File not found: $fileName";
    }
});

