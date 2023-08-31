<?php

Introduction to the PHP float

Floating-point numbers represent numeric values with decimal digits.

Floating-point numbers are often referred to as floats, doubles, or real numbers. Like integers, the range of the floats depends on the platform where PHP runs.

0.125E1 // 0.125 * 10^1 or 1.25

$total = 0.1 + 0.1 + 0.1;
echo $total == 0.3; // return false

echo is_float(0.5);

Summary

Floating-point numbers are numbers with decimal points. Floating-point numbers are also known as floats.
PHP can only represent floats approximately, not precisely.

?>