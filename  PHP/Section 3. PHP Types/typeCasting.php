<?php

Introduction to the PHP type casting

Type casting allows you to convert a value of one type to another. To cast a value, you use the following type casting operators

Cast Operators	               Conversion
(array)              	        Array
(bool) or (boolean)	            Boolean
(int) or (integer)	            Integer
(object)	                    Object
(real), (double), or (float)	Float
(string)	                    String


echo (int)12.5 . '<br>'; // 12
echo (int)12.1 . '<br>'; // 12
echo (int)12.9 . '<br>'; // 12
echo (int)-12.9 . '<br>'; // -12

$message = 'Hi';
$num = (int) $message;
echo $num; // 0

$amount =  (int)'100 USD';
echo $amount; // 100

$qty = null;
echo (int)$qty; // 0


Summary

PHP type casting allows you to convert a value from one type to another.
Use a type casting operator to cast a value to the desired type.

?>