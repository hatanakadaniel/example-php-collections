<?php

$map = new \Ds\Map();

$key1 = new stdClass();
$key2 = new stdClass();

$map->put($key1, 'something 1');
$map->put($key2, 'something 2');

print $map->get($key1) . PHP_EOL;
// something 1

print $map->get($key2) . PHP_EOL;
// something 2