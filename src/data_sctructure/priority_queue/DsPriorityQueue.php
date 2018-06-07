<?php

$priorityQueue = new Ds\PriorityQueue();

$priorityQueue->push('something', 0);
$priorityQueue->push('something 2', 0);

$priorityQueue->push('something 3', 1);
$priorityQueue->push('something 4', 1);


foreach ($priorityQueue as $value) {
    print $value . PHP_EOL;
}
// something 3
// something 4
// something
// something 2