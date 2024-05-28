<?php

// Only allowed for cli
if (PHP_SAPI !== 'cli') {
    die('Not allowed');
}

$start = microtime(true);

// Rename images in uploads folder
$appFolder = __DIR__ . '/../website/app';

// scandir recursively
$files = [];
$objects = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($appFolder . '/uploads'),
    RecursiveIteratorIterator::SELF_FIRST
);

// Rename files
foreach ($objects as $name => $object) {
    if ($object->isFile()) {
        $fullPath = $object->getPathname();
        $newName = preg_replace(
            '/explain-code-me|explain\.code-to\.me|explain-code-to\.me/i',
            'codecookie.fr',
            $fullPath
        );
        if ($newName !== $fullPath) {
            rename($fullPath, $newName);
        }
    }
}

echo 'execution time ' . round(microtime(true) - $start, 2) . ' seconds.';
