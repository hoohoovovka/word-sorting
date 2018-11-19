<?php

namespace Hoohoovovka\WordSorting;

use Hoohoovovka\WordSorting\Exceptions\WrongEncodingException;
use Hoohoovovka\WordSorting\Joiners\StringJoiner;
use Hoohoovovka\WordSorting\Sorters\AlphabetSorter;
use Hoohoovovka\WordSorting\Splitters\CharSplitter;
use Hoohoovovka\WordSorting\Splitters\WordSplitter;

class WordSorter
{

    /**
     * @param string $text
     * @param string $locale
     * @return string
     * @throws WrongEncodingException
     */
    public static function sort(string $text, $locale='en_US')
    {
        if (!self::isUtf8($text))
            throw new WrongEncodingException();

        $words = WordSplitter::split($text);
        $sortedWords = [];
        foreach ($words as $word) {
            $wordChars = CharSplitter::split($word);
            $sortedWords[] = StringJoiner::join(AlphabetSorter::sort($wordChars, $locale));
        }
        return StringJoiner::join($sortedWords, ' ');
    }

    protected static function isUtf8($string)
    {
        return mb_check_encoding($string, 'UTF-8');
    }

}