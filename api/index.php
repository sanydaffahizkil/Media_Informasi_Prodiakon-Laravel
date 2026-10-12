<?php

$storageDir = '/tmp/storage';
$dirs = [
    $storageDir,
    $storageDir . '/app',
    $storageDir . '/framework',
    $storageDir . '/framework/cache',
    $storageDir . '/framework/cache/data',
    $storageDir . '/framework/views',
    $storageDir . '/framework/sessions',
    $storageDir . '/logs',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0777, true);
    }
}

$_ENV['LARAVEL_STORAGE_PATH'] = $storageDir;
$_SERVER['LARAVEL_STORAGE_PATH'] = $storageDir;
putenv('LARAVEL_STORAGE_PATH=' . $storageDir);
putenv('VIEW_COMPILED_PATH=' . $storageDir . '/framework/views');

require __DIR__ . '/../public/index.php';
