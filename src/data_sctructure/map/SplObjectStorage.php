<?php

$map = new SplObjectStorage();

$key1 = new stdClass();
$key2 = new stdClass();

$map[$key1] = 'something 1';
$map->attach($key2, 'something 2');

print $map->offsetGet($key1) . PHP_EOL;
// something 1

print $map[$key2] . PHP_EOL;
// something 2