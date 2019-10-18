<?php

declare(strict_types=1);

/*
 * This file is part of the "Feday2\Sort" package.
 */

require_once __DIR__ . '/../vendor/autoload.php';

use Feday2\Sort\{Sorter, SortAsc, SortDesc, SortNull};

$testArray = [54, 213, 'banana', 123];

$sortArray = (new Sorter(new SortDesc()))->sort($testArray);
\var_dump($sortArray);

$sortArray = (new Sorter(new SortAsc()))->sort($testArray);
\var_dump($sortArray);

$sortArray = (new Sorter(new SortNull()))->sort($testArray);
\var_dump($sortArray);
