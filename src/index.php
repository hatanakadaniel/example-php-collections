<?php

ini_set("memory_limit", "5G");
ini_set("max_execution_time", 3600);

//require __DIR__ . '/vendor/autoload.php';

//$count = 8;
$count = 8;
$realUsed = false;

print 'Memory: ' . memory_get_usage($realUsed) . ' bytes' . PHP_EOL;
$vector = new \Ds\Deque();
$initTime = microtime(true);
for ($i=0; $i < 10**$count; $i++) {
    $vector->push('a');
//    print 'Memory: ' . memory_get_usage($realUsed) . ' bytes' . PHP_EOL;
}
$finalTime = microtime(true);
print 'Memory: ' . memory_get_usage($realUsed) . ' bytes' . PHP_EOL;
print 'Time: ' . ($finalTime - $initTime) . PHP_EOL;


echo PHP_EOL . PHP_EOL;


unset($vector);
print 'Memory: ' . memory_get_usage($realUsed) . ' bytes' . PHP_EOL;
$vector = new SplDoublyLinkedList();
$initTime = microtime(true);
for ($i=0; $i < 10**$count; $i++) {
    $vector->push('a');
//    print 'Memory: ' . memory_get_usage($realUsed) . ' bytes' . PHP_EOL;
}
$finalTime = microtime(true);
print 'Memory: ' . memory_get_usage($realUsed) . ' bytes' . PHP_EOL;
print 'Time: ' . ($finalTime - $initTime) . PHP_EOL;


echo PHP_EOL . PHP_EOL;


unset($vector);
print 'Memory: ' . memory_get_usage($realUsed) . ' bytes' . PHP_EOL;
$vector = [];
$initTime = microtime(true);
for ($i=0; $i < 10**$count; $i++) {
    $vector[] = 'a';
}
$finalTime = microtime(true);
print 'Memory: ' . memory_get_usage($realUsed) . ' bytes' . PHP_EOL;
print 'Time: ' . ($finalTime - $initTime) . PHP_EOL;
