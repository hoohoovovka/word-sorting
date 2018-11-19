<?php

namespace Hoohoovovka\WordSorting\Splitters;

class WordSplitter implements SplitterInterface
{

    public static function split(string $source): array
    {
        return mb_split('\s', $source);
    }

}