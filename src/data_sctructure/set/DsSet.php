<?php

$set = new \Ds\Set();

$key1 = new stdClass();
$key2 = new stdClass();

$set->add($key1);
$set->add($key2);

print $set->contains($key1) . PHP_EOL;
// true

print $set->contains($key2) . PHP_EOL;
// true

$set->remove($key1);
print $set->contains($key1) . PHP_EOL;
// false

