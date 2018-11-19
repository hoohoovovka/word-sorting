<?php

namespace Hoohoovovka\WordSorting\Splitters;

class CharSplitter implements SplitterInterface
{

    public static function split(string $source): array
    {
        return preg_split('//u', $source, null, PREG_SPLIT_NO_EMPTY);
    }

}