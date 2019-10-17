<?php

namespace Feday2\Sort;

final class Sort
{
    private $sortType;

    public function __construct(SortInterface $sortType)
    {
        $this->sortType = $sortType;
    }

    public function setSortType(SortInterface $sortType)
    {
        $this->sortType = $sortType;
    }

    public function Sort($array)
    {
        return $this->sortType->sort($array);
    }
}