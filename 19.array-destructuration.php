<?php

require './helpers.php';

$array = [1, 2, 3, 4];

$prettyPrintArray($array);

list($a, $b, $c, $d) = $array;
 
echo $a . ', ' . $b . ', ' . $c . ', ' . $d;


$lineBreak();

[$x, $y, $z, $xx] = $array;

echo $x . ' - ' . $y . ' - ' . $z . ' - ' . $xx;
