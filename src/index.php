<?php

ini_set("memory_limit", "5G");
ini_set("max_execution_time", 3600);

//require __DIR__ . '/vendor/autoload.php';

//$count = 8;
$count = 8;
$realUsed = false;

echo memory_get_usage($realUsed) . "<br>" . PHP_EOL;
$vector = new \Ds\Deque();
$initTime = microtime(true);
for ($i=0; $i < 10**$count; $i++) {
    $vector->push('a');
//    echo memory_get_usage($realUsed) . "<br>" . PHP_EOL;
}
$finalTime = microtime(true);
echo memory_get_usage($realUsed) . "<br>" . PHP_EOL;
print_r($finalTime - $initTime);


echo  "<br><br>" . PHP_EOL . PHP_EOL;


unset($vector);
echo memory_get_usage($realUsed) . "<br>" . PHP_EOL;
$vector = new SplDoublyLinkedList();
$initTime = microtime(true);
for ($i=0; $i < 10**$count; $i++) {
    $vector->push('a');
//    echo memory_get_usage($realUsed) . "<br>" . PHP_EOL;
}
$finalTime = microtime(true);
echo memory_get_usage($realUsed) . "<br>" . PHP_EOL;
print_r($finalTime - $initTime);


echo  "<br><br>\n\n";


unset($vector);
echo memory_get_usage($realUsed) . "<br>" . PHP_EOL;
$vector = [];
$initTime = microtime(true);
for ($i=0; $i < 10**$count; $i++) {
    $vector[] = 'a';
}
$finalTime = microtime(true);
echo memory_get_usage($realUsed) . "<br>" . PHP_EOL;
print_r($finalTime - $initTime);
