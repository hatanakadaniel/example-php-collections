<?php

$deque = new Ds\Deque();

$deque->push('something');
$deque->push('something 1');
$deque->unshift('something 2');

print $deque->first() . PHP_EOL;
// something 2

print $deque->last() . PHP_EOL;
// something 1
