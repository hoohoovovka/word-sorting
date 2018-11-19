<?php

namespace Hoohoovovka\WordSorting\Sorters;

class AlphabetSorter implements SorterInterface
{

    /**
     * @param array $array
     * @param string $params Locale
     * @return array
     */
    public static function sort(array $array, $params=null): array
    {
        $collator = new \Collator($params);
        $collator->sort($array, \Collator::SORT_STRING);
        return $array;
    }

}