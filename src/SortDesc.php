<?php

namespace Feday2\Sort;

final class SortDesc implements SortInterface
{
    public function sort($array)
    {
        \rsort($array);
        return $array;
    }
}