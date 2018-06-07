<?php

$priorityQueue = new SplPriorityQueue();

$priorityQueue->insert('something', 0);
$priorityQueue->insert('something 2', 0);

$priorityQueue->insert('something 3', 1);
$priorityQueue->insert('something 4', 1);


foreach ($priorityQueue as $value) {
    print $value . PHP_EOL;
}
// something 3
// something 4
// something
// something 2

