<?php
/**
 * Created by PhpStorm.
 * User: hoohoovovka
 * Date: 19.11.18
 * Time: 12:57
 */

namespace hoohoovovka\WordSorting\Tests\Sorters;

use Hoohoovovka\WordSorting\Sorters\AlphabetSorter;
use PHPUnit\Framework\TestCase;

class AlphabetSorterTest extends TestCase
{

    public function testSort()
    {
        $this->assertEquals(['a', 'b', 'c'], AlphabetSorter::sort(['b', 'c', 'a']));
        $this->assertEquals(['а', 'б', 'в'], AlphabetSorter::sort(['а', 'в', 'б'], 'ru_RU'));
    }
}
