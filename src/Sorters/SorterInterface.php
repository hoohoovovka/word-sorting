<?php

namespace Hoohoovovka\WordSorting\Sorters;

interface SorterInterface
{

    public static function sort(array $array, $params=null): array;

}