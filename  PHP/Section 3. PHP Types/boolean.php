<?php

Introduction to PHP Boolean

A boolean value represents a truth value. In other words, a boolean value can be either true or false. PHP uses the bool type to represent boolean values.

To represent boolean literals, you can use the true and false keywords. These keywords are case-insensitive. Therefore, the following are the same as true:

True
TRUE
And the following are the same as false:

False
FALSE
When you use non-boolean values in a boolean context, e.g., if statement. PHP evaluates that value to a boolean value. The following values evaluate to false:

The keyword false
The integer zero (0)
The floating-point number zero (0.0)
The empty string ('') and the string "0"
The NULL value
An empty array, i.e., an array with zero elements

The following values evaluate to true:

The keyword true
Any non-zero integer
Any non-zero floating-point number
Any non-empty string
Any non-empty array
Any object
Any resource

?>