<?php

// Ensure caching directories exist in Vercel's /tmp directory
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

// Copy bootstrap/cache files to /tmp/bootstrap/cache if they exist in the original directory
$sourceCachePath = __DIR__.'/../bootstrap/cache';
$targetCachePath = '/tmp/bootstrap/cache';

if (is_dir($sourceCachePath)) {
    $files = scandir($sourceCachePath);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..' && is_file($sourceCachePath.'/'.$file)) {
            if (!file_exists($targetCachePath.'/'.$file)) {
                copy($sourceCachePath.'/'.$file, $targetCachePath.'/'.$file);
            }
        }
    }
}

require __DIR__.'/../public/index.php';