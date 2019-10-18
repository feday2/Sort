# Serialize object
Sort array using Strategy Pattern

## Installation ##
```bash
$ composer require feday2/sort
```

## Usage ##
```php
<?php

use Feday2\Sort\{Sorted, SortDesc};

...

$sortType = new SortDesc();
$sorter =  new Sorter($sortType);
$sortedArray = $sorter->sort($array);

```