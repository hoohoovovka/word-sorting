<?php
/**
 * Created by PhpStorm.
 * User: hoohoovovka
 * Date: 19.11.18
 * Time: 12:58
 */

namespace hoohoovovka\WordSorting\Tests\Splitters;

use Hoohoovovka\WordSorting\Splitters\CharSplitter;
use PHPUnit\Framework\TestCase;

class CharSplitterTest extends TestCase
{

    public function testSplit()
    {
        $this->assertEquals(['a','b','c'], CharSplitter::split('abc'));
        $this->assertEquals(['а','б','в'], CharSplitter::split('абв'));
    }
}
