<?php

/* FUNCTIONS */

declare(strict_types=1);

function foo(): ?int {
    return null;
}
 
// In Strict Types Mode without ? before int, returning null would throw an error

function bar(): int|float {
    return 8;
}


function mult(int|float $x, int|float $y = 1): int|float {
    return $x * $y;
}


// Splat Operator => when you do not know the number of arguments you will pass in => it is an array

function sum(...$numbers): int|float {
    $sum = 0;

    foreach($numbers as $nb) {
        $sum += $nb;
    }

    return $sum;
}

echo sum(1, 2, 3, 4, 5, 6, 7, 8, 9);

// arr_sum($numbers)  => Built in function

function sum2(int|float $x, int|float $y, int|float ...$numbers): int|float {
    return $x + $y + array_sum($numbers);
}

echo '<br>','<br>';

echo sum2(5, 8 , 9);


