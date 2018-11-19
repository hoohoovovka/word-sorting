<?php
/**
 * Created by PhpStorm.
 * User: hoohoovovka
 * Date: 19.11.18
 * Time: 12:57
 */

namespace hoohoovovka\WordSorting\Tests\Joiners;

use Hoohoovovka\WordSorting\Joiners\StringJoiner;
use PHPUnit\Framework\TestCase;

class StringJoinerTest extends TestCase
{

    public function testJoin()
    {
        $this->assertEquals('abc', StringJoiner::join(['a', 'b', 'c']));
        $this->assertEquals('a b c', StringJoiner::join(['a', 'b', 'c'], ' '));
    }
}
