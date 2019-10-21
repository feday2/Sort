<?php

declare(strict_types=1);

/*
 * This file is part of the "Feday2\Sort" package.
 */

namespace Feday2\Sort;

final class SortAsc implements SorterInterface
{
    public function sort(array $array): array
    {
        \sort($array);

        return $array;
    }
}
