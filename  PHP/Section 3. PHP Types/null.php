<?php

Introduction to the PHP null type

The null is a special type in PHP. The null type has only one value which is also null. In fact, null indicates the absence of a value for a variable.


$email = null;
var_dump($email); // NULL

In addition, when you use the unset() function to unset a variable, the variable is also null

$email = 'webmaster@phptutorial.net';
unset($email);

var_dump($email); // NULL

$email = null;
$first_name = Null;
$last_name = NULL;

To check if a variable is null or not, you use the is_null() function. The is_null()
$email = null;
var_dump(is_null($email)); // bool(true)

$home = 'phptutorial.net';
var_dump(is_null($home)); // bool(false)

To test if a variable is null or not, you can also use the identical operator ===

$email = null;
$result = ($email === null);
var_dump($result); // bool(true)

$home= 'phptutorial.net';
$result = ($home === null);
var_dump($result); // bool(false)


Summary

PHP null type has a value called null that represents a variable with no value.
Use the is_null() function or === operator to compare a variable with null.

?>