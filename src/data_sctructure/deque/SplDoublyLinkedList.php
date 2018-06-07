<?php

$deque = new SplDoublyLinkedList();

$deque->push('something');
$deque->push('something 1');
$deque->unshift('something 2');

print $deque->bottom() . PHP_EOL;
// something 2

print $deque->top() . PHP_EOL;
// something 1
