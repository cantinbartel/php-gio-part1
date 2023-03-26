<?php

/* variables, anonymous and arrow function */

function sum(int|float ...$numbers): int|float {
    return array_sum($numbers);
}

echo sum(1, 2, 3, 4);

$x = 'sum';

echo '<br>', '<br>';
echo $x(1, 2, 3, 4, 5, 6, 7, 8);
echo '<br>', '<br>';

// Anonymous function 

// needs to end with a semi column ;

$add = function (int|float $x, int|float $y, float|int ...$numbers): int|float {
   return $x + $y + array_sum($numbers);
};

echo $add(2, 4, 5);

$a = 8;

$test = function (int|float ...$numbers) use($a) {
    $a = 6;
    return array_sum($numbers) / $a;
};

echo '<br>', '<br>', $test(1, 2, 3, 4, 5, 6, 7, 8, 8);

echo '<br>', '<br>', '$a = ' . $a; // if we would have used =>  use(&$a)  => $a would be 6 now


// Arrow Functions

$arr = [1, 2, 3, 4, 5];

$arr = array_map(fn($number) => $number * 2, $arr);

echo '<br>', '<br>';

print_r($arr);

// With arrow functions you can always use the parent scope variables within the arrow function without using the use keyword
// BUT you cannot modify the parent variables

// Unfortunately with arrow functions we can have only one line expression...
