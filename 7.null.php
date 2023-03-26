<?php

/* NULL */

$x = null;

var_dump(is_null($x));
echo '<br>';
var_dump($x === null);

$y = 123;

echo '<br>';
var_dump($y);

unset($y); // Destroy the variable

echo '<br>';
var_dump($y);

echo '<br>';
var_dump((int) $x); // 0

echo '<br>';
var_dump((string) $x); // ""

echo '<br>';
var_dump((bool) $x); // false

echo '<br>';
var_dump((array) $x); // {}
