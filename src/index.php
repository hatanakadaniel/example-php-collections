<?php

ini_set("memory_limit", "4G");
ini_set("max_execution_time", 3600);

require __DIR__ . '/vendor/autoload.php';

//$count = 8;
$count = 5;
$realUsed = false;

echo memory_get_usage($realUsed) . "<br>\n";
$vector = new \Ds\Deque();
$initTime = microtime(true);
for ($i=0; $i < 10**$count; $i++) {
    $vector->push('a');
    echo memory_get_usage($realUsed) . "<br>\n";
}
$finalTime = microtime(true);
echo memory_get_usage($realUsed) . "<br>\n";
print_r($finalTime - $initTime);


echo  "<br><br>\n\n";


unset($vector);
echo memory_get_usage($realUsed) . "<br>\n";
$vector = new SplDoublyLinkedList();
$initTime = microtime(true);
for ($i=0; $i < 10**$count; $i++) {
    $vector->push('a');
    echo memory_get_usage($realUsed) . "<br>\n";
}
$finalTime = microtime(true);
echo memory_get_usage($realUsed) . "<br>\n";
print_r($finalTime - $initTime);


echo  "<br><br>\n\n";


unset($vector);
echo memory_get_usage($realUsed) . "<br>\n";
$vector = [];
$initTime = microtime(true);
for ($i=0; $i < 10**$count; $i++) {
    $vector[] = 'a';
}
$finalTime = microtime(true);
echo memory_get_usage($realUsed) . "<br>\n";
print_r($finalTime - $initTime);
