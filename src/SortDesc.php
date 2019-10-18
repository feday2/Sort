<?php

declare(strict_types=1);

/*
 * This file is part of the "Feday2\Sort" package.
 */

namespace Feday2\Sort;

final class SortDesc implements SortInterface
{
    public function sort(array $array): array
    {
        \rsort($array);

        return $array;
    }
}
