<?php

// 1. Ensure all required storage and cache directories exist in Vercel's writable /tmp directory
$directories = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/bootstrap/cache',
];

foreach ($directories as $directory) {
    if (!is_dir($directory)) {
        mkdir($directory, 0777, true);
    }
}

// 2. Set environment variables to force Laravel to use writable /tmp paths
putenv('LARAVEL_STORAGE_PATH=/tmp/storage');
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
putenv('APP_CONFIG_CACHE=/tmp/bootstrap/cache/config.php');
putenv('APP_EVENTS_CACHE=/tmp/bootstrap/cache/events.php');
putenv('APP_PACKAGES_CACHE=/tmp/bootstrap/cache/packages.php');
putenv('APP_ROUTES_CACHE=/tmp/bootstrap/cache/routes.php');
putenv('APP_SERVICES_CACHE=/tmp/bootstrap/cache/services.php');

$_ENV['LARAVEL_STORAGE_PATH'] = '/tmp/storage';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
$_ENV['APP_CONFIG_CACHE'] = '/tmp/bootstrap/cache/config.php';
$_ENV['APP_EVENTS_CACHE'] = '/tmp/bootstrap/cache/events.php';
$_ENV['APP_PACKAGES_CACHE'] = '/tmp/bootstrap/cache/packages.php';
$_ENV['APP_ROUTES_CACHE'] = '/tmp/bootstrap/cache/routes.php';
$_ENV['APP_SERVICES_CACHE'] = '/tmp/bootstrap/cache/services.php';

$_SERVER['LARAVEL_STORAGE_PATH'] = '/tmp/storage';
$_SERVER['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
$_SERVER['APP_CONFIG_CACHE'] = '/tmp/bootstrap/cache/config.php';
$_SERVER['APP_EVENTS_CACHE'] = '/tmp/bootstrap/cache/events.php';
$_SERVER['APP_PACKAGES_CACHE'] = '/tmp/bootstrap/cache/packages.php';
$_SERVER['APP_ROUTES_CACHE'] = '/tmp/bootstrap/cache/routes.php';
$_SERVER['APP_SERVICES_CACHE'] = '/tmp/bootstrap/cache/services.php';

// 3. Copy bootstrap/cache files to /tmp/bootstrap/cache if they exist in source
$sourceCachePath = __DIR__.'/../bootstrap/cache';
$targetCachePath = '/tmp/bootstrap/cache';

if (is_dir($sourceCachePath)) {
    $files = scandir($sourceCachePath);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..' && $file !== '.gitignore' && !str_ends_with($file, '.tmp') && is_file($sourceCachePath.'/'.$file)) {
            if (!file_exists($targetCachePath.'/'.$file)) {
                copy($sourceCachePath.'/'.$file, $targetCachePath.'/'.$file);
            }
        }
    }
}

// 4. Delegate to the standard Laravel public front-controller
require __DIR__.'/../public/index.php';