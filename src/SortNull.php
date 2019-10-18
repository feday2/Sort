<?php

declare(strict_types=1);

/*
 * This file is part of the "Feday2\Sort" package.
 */

namespace Feday2\Sort;

final class SortNull implements SortInterface
{
    public function sort(array $array): array
    {
        return $array;
    }
}
