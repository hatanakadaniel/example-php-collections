<?php

$stack = new \Ds\Stack();

$stack->push('something');
$stack->push('something 1');
$stack->push('something 2');

foreach ($stack as $value) {
    print $value . PHP_EOL;
}
// something 2
// something 1
// something

while (!$stack->isEmpty()) {
    print $stack->pop() . PHP_EOL;
}
//