<?php

$minHeap = new SplMinHeap();

$minHeap->insert('a');
$minHeap->insert('b');
$minHeap->insert('c');
$minHeap->insert('d');
$minHeap->insert('e');

foreach ($minHeap as $value) {
    print $value . PHP_EOL;
}
// a
// b
// c
// d
// e
