<?php

spl_autoload_register(function ($className) {
    $baseNamespace = 'dotwitter\\';
    $baseDirectory = __DIR__ . '/../';

    $className = ltrim($className, '\\');
    $fileName = '';

    if (strpos($className, $baseNamespace) === 0) {
        $className = substr($className, strlen($baseNamespace));
        $fileName = $baseDirectory . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
    }

    if (file_exists($fileName)) {
        require_once $fileName;
    } else {
        echo "File not found: $fileName";
    }
});