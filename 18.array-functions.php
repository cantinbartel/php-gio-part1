<?php

require './helpers.php';

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$even = array_filter($array, fn($number) => $number % 2 === 0);

$prettyPrintArray($even);

$lineBreak();

// --------------------------------------------------------------------

$evenIndex = array_filter($array, fn($key) => $key % 2 === 0, ARRAY_FILTER_USE_KEY); // you can use ARRAY_FILTER_USE_BOTH also with fn($value, $key)

$prettyPrintArray($evenIndex);

$lineBreak();

// --------------------------------------------------------------------

// To reindex array

$even = array_values($even);

$prettyPrintArray($even);

$lineBreak();

// --------------------------------------------------------------------

// Array Keys

$array2 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 1];

$keys = array_keys($array2);

$prettyPrintArray($keys);

$lineBreak();

$foundKey = array_keys($array2, 1);

$prettyPrintArray($foundKey); // a & d

$lineBreak();

// --------------------------------------------------------------------

// Array Reduce

$invoiceItems = [
    ['price' => 9.99, 'qty' => 3, 'desc' => 'item 1'],
    ['price' => 14.99, 'qty' => 2, 'desc' => 'item 2'],
    ['price' => 4.99, 'qty' => 8, 'desc' => 'item 3'],
    ['price' => 29.99, 'qty' => 5, 'desc' => 'item 4'],
    ['price' => 2.99, 'qty' => 4, 'desc' => 'item 5'],
];

$total = array_reduce($invoiceItems, fn($sum, $item) => $sum + ($item['qty'] * $item['price'])); // 3rd optional argument => initiale value of sum

echo $total;


$lineBreak();

// --------------------------------------------------------------------

// Array Search => returns the index of the first matching value

$array3 = ['a', 'b', 'c', 'd', 'b', 'e'];

echo array_search('b', $array3);


$lineBreak();

// --------------------------------------------------------------------

// Array sort

$array4 = ['d' => 3, 'b' => 1, 'c' => 4, 'a' => 2];

$prettyPrintArray($array4);

$lineBreak();

asort($array4);

$prettyPrintArray($array4);

$lineBreak();

ksort($array4);  // sorting by keys

$prettyPrintArray($array4); 


$lineBreak();

// sorting in a custom way

// callback fn(a, b) ===> if a = b : 0, a < b : -1, a > b : 1  ===> so spaceship operator <=> is perfect for that use case

usort($array4, fn($a, $b) => $a <=> $b);

echo 'Sorted Numerically by ASC';
$prettyPrintArray($array4);


usort($array4, fn($a, $b) => $b <=> $a);

echo 'Sorted Numerically by DESC';
$prettyPrintArray($array4);
