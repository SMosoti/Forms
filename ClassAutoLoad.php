<?php
require_once 'conf.php';
$directory = [
    'Layouts',
    'Forms',
];

spl_autoload_register(function ($class_name) use ($directory) {
    foreach ($directory as $dir) {
        $filePath = __DIR__ . '/' . $dir . '/' . $class_name . '.php';
        if (file_exists($filePath)) {
            require_once $file;
            return;
        }
    }
});
//Creating various instances to test autoloading
$layoutInstance = new layouts();
$formInstance = new forms();