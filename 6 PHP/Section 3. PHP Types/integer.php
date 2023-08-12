<?php

Introduction to the PHP int type

Integers are whole numbers such as -3, -2, -1, 0, 1, 2, 3… PHP uses the int type to represent the integers.

The range of integers depends on the platform where PHP runs. Typically, integers has a range from -2,147,438,648 to 2,147,483,647. It’s equivalent to 32 bits signed.

To get the size of the integer, you use the PHP_INT_SIZE constant. Also, you use the PHP_INT_MIN and PHP_INT_MAX constants to get the minimum and maximum integer values.

+010 // decimal 8
0x10 // decimal 16
0xFF // decimal 255
0b10 // decimal 2
$amount = 100;
echo is_int($amount);

?>