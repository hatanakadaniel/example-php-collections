<?php

$set  = new SplObjectStorage();

$key1 = new stdClass();
$key2 = new stdClass();

$set->attach($key1);
$set->attach($key2);

print $set->contains($key1) . PHP_EOL;
// true

print $set->contains($key2) . PHP_EOL;
// true

$set->detach($key1);
print $set->contains($key1) . PHP_EOL;
// false
