<?php

$maxHeap = new SplMaxHeap();

$maxHeap->insert('a');
$maxHeap->insert('b');
$maxHeap->insert('c');
$maxHeap->insert('d');
$maxHeap->insert('e');

foreach ($maxHeap as $value) {
    print $value . PHP_EOL;
}
// e
// d
// c
// b
// a


