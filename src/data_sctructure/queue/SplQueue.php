<?php

$queue = new SplQueue();

$queue->enqueue('something');
$queue->enqueue('something 1');
$queue->enqueue('something 2');

while (!$queue->isEmpty()) {
    print $queue->dequeue() . PHP_EOL;
}
// something
// something 1
// something 2

print $queue->count() . PHP_EOL;
// 0

