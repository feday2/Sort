<?php

namespace Feday2\Sort;

final class SortAsc implements SortInterface
{
    public function sort($array)
    {
        \sort($array);
        return $array;
    }
}