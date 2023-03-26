<?php
define('STATUS_PAID', 'paid');
echo defined('PAYMENT_STATUS');

// You can define constant using either define() or const keyword
const STATUS_PENDING = 'pending';

// The main difference is 
// constant with const keyword are defined at a COMPILE time
// While constants created with the defined function are defined at a RUNTIME
// you can't define constant with const keyword within your control structure like 
// loops or if else for example
// but you can define const with the define function in your control structures

if(true) {
    define('NATIONALITY', 'belgian');
}

// Magic CONSTANTS
echo __FILE__;

// Variable Variables
$foo = 'bar';
$$foo = 'baz';
// echo $bar; // --> 'baz'
?>