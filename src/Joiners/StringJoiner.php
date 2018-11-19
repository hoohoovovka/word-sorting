<?php

namespace Hoohoovovka\WordSorting\Joiners;

class StringJoiner implements JoinerInterface
{

    /**
     * @param string[] $array
     * @param string $piece
     * @return string
     */
    public static function join(array $array, $piece='')
    {
        return implode($piece, $array);
    }

}