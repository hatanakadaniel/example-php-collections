<?php

$maxHeap = new \Ds\PriorityQueue();

$maxHeap->push('a', 0);
$maxHeap->push('b', 1);
$maxHeap->push('c', 2);
$maxHeap->push('d', 3);
$maxHeap->push('e', 4);

while ($maxHeap->count() > 0) {
    print $maxHeap->pop() . PHP_EOL;
}
// e
// d
// c
// b
// a