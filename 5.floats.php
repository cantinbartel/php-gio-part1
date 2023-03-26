<?php

/* FLOATS */

$a = 13.5e3; // 13,500

echo $a;
echo '<br>';

$b = 13.5e-3; // 0.0135

echo $b;
echo '<br>';

echo 'PHP_FLOAT_MAX: ', PHP_FLOAT_MAX;
echo '<br>';
echo 'PHP_FLOAT_MIN: ', PHP_FLOAT_MIN;

// Attention
$x = floor((0.1 + 0.7) * 10);
echo '<br>';
echo $x; // The excpected result is 8 but we got 7 

// WHY?
// The is because 0.1 or 0.7 (Floating Numbers) do not have an exact representation in base2 which is Binary
// And Binary is used internally to store Floating Numbers
// And therfore by converting it to biinary internally it looses some of the precision
