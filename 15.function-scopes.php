<?php

/* Function and Variable Scope */

$x = 5;

function foo() {
    echo $x;      // Warning: Undefined variable $x in /Applications/MAMP/htdocs/php-with-gio/index.php on line 8
}


function bar() {
    global $x;

    $x = 10;

    echo $x;
}

bar();

echo '<br>', '<br>';
echo '$x = ' . $x = 10;

// SUPER GLOBAL
echo '<br>', '<br>';
echo '<pre>';
print_r($GLOBALS);
echo '</pre>';

function foo2() {
    echo '<br>', '<br>', $GLOBALS['x'];
}

foo2();
