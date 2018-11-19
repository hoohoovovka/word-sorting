# Word Sorting

Component sorts letters in alphabetical order in each word for source UTF-8 text for selected locale

## Installing

```
composer require hoohoovovka/word-sorting
```

## Usage

```
WordSorter::sort('lemon orange banana apple'); // Returns 'elmno aegnor aaabnn aelpp'
WordSorter::sort('лимон апельсин банан яблоко', 'ru_RU'); // Returns 'илмно аеилнпсь аабнн бклооя'
WordSorter::sort('αβγαβγ αβγαβγαβγ', 'el_GR'); // Returns 'ααββγγ αααβββγγγ'
```


 
