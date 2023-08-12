<?php

<p>
Introduction to PHP constants

A constant is simply a name that holds a single value. As its name implies, the value of a constant cannot be changed during the execution of the PHP script.

To define a constant, you use the  define() function. The  define() function takes the constant’s name as the first argument and the constant value as the second argument. For example:


</p>

define('WIDTH','1140px');
echo WIDTH;

define( 'ORIGIN', [0, 0] );

const CONSTANT_NAME = value;

<p>
It’s possible to define case-insensitive constants. However, it’s deprecated since PHP 7.3
</p>


const SALES_TAX = 0.085;

$gross_price = 100;

$net_price = $gross_price * (1 + SALES_TAX);

echo $net_price; // 108.5


define('PREFIX', 'OPTION');

define(PREFIX . '_1', 1);
define(PREFIX . '_2', 2);
define(PREFIX . '_3', 3);

?>