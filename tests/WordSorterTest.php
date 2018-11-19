<?php
namespace Hoohoovovka\WordSorting\Tests;
use Hoohoovovka\WordSorting\Exceptions\WrongEncodingException;
use Hoohoovovka\WordSorting\WordSorter;
use PHPUnit\Framework\TestCase;

class WordSorterTest extends TestCase
{
    public function testResults()
    {
        $this->assertEquals('elmno aegnor aaabnn aelpp', WordSorter::sort('lemon orange banana apple'));
        $this->assertEquals('илмно аеилнпсь аабнн бклооя', WordSorter::sort('лимон апельсин банан яблоко', 'ru_RU'));
        $this->assertEquals('ααββγγ αααβββγγγ', WordSorter::sort('αβγαβγ αβγαβγαβγ', 'el_GR'));
    }

    public function testException()
    {
        $this->expectException(WrongEncodingException::class);

        WordSorter::sort(mb_convert_encoding ('лимон апельсин банан яблоко' , 'windows-1251' , 'UTF-8' ), 'ru_RU');
    }

    public function testTextLength()
    {
        $this->assertEquals(
            mb_strlen('lemon orange', 'UTF-8'),
            mb_strlen(WordSorter::sort('lemon orange'), 'UTF-8')
        );
        $this->assertEquals(
            mb_strlen('лимон апельсин', 'UTF-8'),
            mb_strlen(WordSorter::sort('лимон апельсин', 'ru_RU'), 'UTF-8')
        );
        $this->assertEquals(
            mb_strlen('αβγ    αβγ          αβγα', 'UTF-8'),
            mb_strlen(WordSorter::sort('αβγ    αβγ          αβγα', 'el_GR'), 'UTF-8')
        );
    }

}