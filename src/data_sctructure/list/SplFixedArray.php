<?php

$list  = new SplFixedArray(10);

$list[0] = 'something';
$list[9] = 'something';

$list->setSize(11);

$list[10] = 'something';

foreach ($list as $value) {
    print $value . PHP_EOL;
}
// something
//
// ...
//
// something
// something