<?php
/* INTEGER */

echo 'PHP_INT_MAX: ',  PHP_INT_MAX;
echo '<br>';
echo 'PHP_INT_MIN: ', PHP_INT_MIN;

// Base16 numbers prefixed with 0x:
$a = 0x2A; // 42

echo '<br>';
echo "\n $a";

// Base8 numbers prefixed with 0:
$b = 017; // 15

echo '<br>';
echo "\n $b";

// Base2 numbers prefixed with 0b;
$c = 0b1100;

echo '<br>';
echo $c; // 12

// type Casting

$d = (int) 5.98; // 5

$e = (int) true; // 1

$f = (int) false; // 0

$g = (int) 'test'; // 0

echo '<br>';
var_dump(is_int($a));
