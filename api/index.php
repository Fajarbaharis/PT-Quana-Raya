<?php

// Show all PHP errors so we can debug on Vercel
ini_set('display_errors', '1');
error_reporting(E_ALL);

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

// Wrap Laravel bootstrap in try-catch to display actual errors
try {
    require __DIR__.'/../public/index.php';
} catch (\Throwable $e) {
    http_response_code(500);
    header('Content-Type: text/html; charset=utf-8');
    echo '<h1>Laravel Boot Error</h1>';
    echo '<p><strong>Message:</strong> ' . htmlspecialchars($e->getMessage()) . '</p>';
    echo '<p><strong>File:</strong> ' . htmlspecialchars($e->getFile()) . ':' . $e->getLine() . '</p>';
    echo '<pre>' . htmlspecialchars($e->getTraceAsString()) . '</pre>';

    // Also log to stderr so it shows in Vercel Logs
    error_log('Laravel Boot Error: ' . $e->getMessage());
    error_log('File: ' . $e->getFile() . ':' . $e->getLine());
}