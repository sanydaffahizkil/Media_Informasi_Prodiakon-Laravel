<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

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

try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    echo "Exception: " . $e->getMessage() . " in " . $e->getFile() . ":" . $e->getLine();
}
