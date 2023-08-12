<?php

Introduction to PHP strings

In PHP, a string is a sequence of characters. PHP provides you with four ways to define a literal string, including single-quoted, double-quoted, heredoc syntax, and nowdoc syntax. This tutorial focuses on the single-quoted and double-quoted strings.

$title = 'PHP string is awesome';

$title = "PHP string is awesome";

$name = 'John';

$name = 'John';
echo 'Hello ' . $name;

$name = 'John';
echo 'Hello {$name}';

Summary

A string is a sequence of characters surrounded by single quotes or double quotes.
PHP substitutes variables embedded in a double-quoted string.
A string is a zero-based index. Therefore, you can access a character at a specific position in a string using the square brackets [].
Use the strlen() function to get the length of the string.

?>