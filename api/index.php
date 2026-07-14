<?php

// Set storage path to /tmp BEFORE Laravel boots
if (isset($_ENV['VERCEL']) || getenv('VERCEL')) {
    $storagePath = '/tmp/storage';
    
    // Create necessary directories
    $directories = [
        $storagePath . '/framework/views',
        $storagePath . '/framework/cache/data',
        $storagePath . '/framework/sessions',
        $storagePath . '/framework/testing',
        $storagePath . '/logs',
        '/tmp/bootstrap/cache',
    ];

    foreach ($directories as $directory) {
        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }
    }
}

// Now boot Laravel
require __DIR__ . '/../public/index.php';