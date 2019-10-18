<?php

declare(strict_types=1);

/*
 * This file is part of the "Feday2\Sort" package.
 */

namespace Feday2\Sort;

final class Sorter
{
    private $sortType;

    public function __construct(SortInterface $sortType)
    {
        $this->sortType = $sortType;
    }

    public function setSortType(SortInterface $sortType): void
    {
        $this->sortType = $sortType;
    }

    public function Sort(array $array): array
    {
        return $this->sortType->sort($array);
    }
}
