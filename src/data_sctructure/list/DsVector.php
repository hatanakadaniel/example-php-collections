<?php

$list = new Ds\Vector();

$list->push('something');

$list->insert(1, 'something');

$list->set(0, 'something else');

foreach ($list as $value) {
    print $value . PHP_EOL;
}
// something else
// something

print $list->get(0) . PHP_EOL;
// something else

print $list instanceof \Ds\Sequence . PHP_EOL;
// true

print $list instanceof \Ds\Vector . PHP_EOL;
// true