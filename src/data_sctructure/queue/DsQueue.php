<?php

$queue = new Ds\Queue();

$queue->push('something');
$queue->push('something 1');
$queue->push('something 2');

while (!$queue->isEmpty()) {
    print $queue->pop() . PHP_EOL;
}
// something
// something 1
// something 2

print $queue->count() . PHP_EOL;
// 0

