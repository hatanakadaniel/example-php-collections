<?php

$directory = new RecursiveDirectoryIterator('.');
$directory = new RecursiveIteratorIterator($directory);
$directory = new RegexIterator($directory, '/\.txt/i');

foreach ($directory as $file) {
    print_r($file . PHP_EOL);
}

