<?php

Introduction to PHP type juggling

PHP is a loosely typed programming language. It means that when you define a variable, you don’t need to declare a type for it. Internally, PHP will determine the type by the context in which you use the variable.

$my_var = 'PHP'; // a string
$my_var = 'PHP'; // a string
$my_var = 100; // an integer

$qty = 20;
if($qty == '20') {
    echo 'Equal';
}

$total = 100;
$qty = "20";
$total = $total + $qty;

echo $total; // 120

$total = 100;
$qty = "20 pieces";
$total = $total + $qty;

echo $total; // 120

Summary

PHP is a loosely typed language. PHP determines the variable type based on the value.
When comparing values of different types, PHP implicitly converts them to the same comparable type.

?>