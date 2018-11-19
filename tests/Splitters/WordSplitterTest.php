<?php
/**
 * Created by PhpStorm.
 * User: hoohoovovka
 * Date: 19.11.18
 * Time: 12:58
 */

namespace hoohoovovka\WordSorting\Tests\Splitters;

use Hoohoovovka\WordSorting\Splitters\WordSplitter;
use PHPUnit\Framework\TestCase;

class WordSplitterTest extends TestCase
{

    public function testSplit()
    {
        $this->assertEquals(['a', 'b', 'c'], WordSplitter::split('a b c'));
        $this->assertEquals(['a', 'b', '', 'c', '', '', ''], WordSplitter::split('a b  c   '));
    }
}
