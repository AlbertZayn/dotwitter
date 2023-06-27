<?php

spl_autoload_register(function ($className) {
    var_dump($className);
    $baseNamespace = 'dotwitter\\';
    $baseDirectory = __DIR__ . '/';

    $className = ltrim($className, '\\');
    $fileName = '';
    $namespace = '';

    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }

    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    $file = $baseDirectory . $fileName;

    if (file_exists($file)) {
        require $file;
    }
 
});
