<?php

// Expensive Calculation Functions

// function getValue() {
//     $value = someVeryExpensiveFunction(8);
//     return $value;
// }

function getValue() {
    static $value = null;           // static caches the $value

    if ($value === null) {
        $value = someVeryExpensiveFunction(8);
    }

    return $value;
}

function someVeryExpensiveFunction($x) {
    sleep(2);
    echo '    ' . 'PROCESSING...';
    return ($x ** $x) - ($x * $x);
}


echo getValue(), '<br>', '<br>';
echo getValue(), '<br>', '<br>';
echo getValue(), '<br>', '<br>';
