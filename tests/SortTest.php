<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Feday2\Sort\{Sort, SortAsc, SortDesc};

$testArray = [ 54, 213, 123, 'banana'];

$sorting = new Sort(new SortDesc);
$array = $sorting->sort($testArray);
var_dump($array);