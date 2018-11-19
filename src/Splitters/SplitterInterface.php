<?php

namespace Hoohoovovka\WordSorting\Splitters;

interface SplitterInterface
{
    /**
     * @param string $source
     * @return string[]
     */
    public static function split(string $source): array;
}