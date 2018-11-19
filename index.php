<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL);

require __DIR__ . '/vendor/autoload.php';

$s = \Hoohoovovka\WordSorting\WordSorter::sort('lemon orange banana apple');
var_dump($s);

$s = \Hoohoovovka\WordSorting\WordSorter::sort('лимон апельсин банан яблоко', 'ru_RU');
var_dump($s);

$s = \Hoohoovovka\WordSorting\WordSorter::sort('αβγαβγ αβγαβγαβγ', 'el_GR');
var_dump($s);

$s = \Hoohoovovka\WordSorting\WordSorter::sort('αβγ    αβγ          αβγα', 'el_GR');
var_dump($s);

/*$s = \Hoohoovovka\WordSorting\WordSorter::sort(mb_convert_encoding ('лимон апельсин банан яблоко' , 'windows-1251' , 'UTF-8' ), 'ru_RU');
var_dump($s);*/

$source = 'aaa      bbb';
$r = mb_split('\s', $source);
var_dump($r);