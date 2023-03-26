<?php
/* PHP is dynamically typed or also known as weaklyt typed language where you are not required
to define the type of your variable
also the type of the variable can change after it has been define
Dynamically Typed Checking --> type checking happens at a RUNTIME --> PHP
Statically Type Checking --> type checking happens at a COMPILE TIME --> JAVA, C++ and C# */

/* Data Types and Type Casting */

# 4 Scalar Types
    # bool - true/false
    # int
    # float
    # string

#

# 4 Compound Types
    # array
    # object
    # callable
    # iterable

# 2 special types
    # resource
    # null

declare(strict_types=1);

function sum(int $x, int $y) {
    return $x + $y;
}

// $sum = sum('2', 3);
$sum = sum(2, 3);

echo $sum;
echo '<br>';

// Type Casting
$x = (int) '5';
var_dump($x);

?>