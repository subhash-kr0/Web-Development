<?php

Introduction to the PHP heredoc string

When you place variables in a double-quoted string, PHP will expand the variable names. If a string contains the double quotes (“), you need to escape them using the backslash character(\).

$he = 'Bob';
$she = 'Alice';

$text = "$he said, \"PHP is awesome\".
\"Of course.\" $she agreed.";

echo $text;

$he = 'Bob';
$she = 'Alice';

$text = <<<TEXT
$he said "PHP is awesome".
"Of course" $she agreed."
TEXT;

echo $text;

PHP heredoc syntax
$str = <<<IDENTIFIER
place a string here
it can span multiple lines
and include single quote ' and double quotes "
IDENTIFIER;

$str = <<<IDENTIFIER
    valid
    IDENTIFIER;

echo $str;

$title = 'My site';

$header = <<<HEADER
<header>
    <h1>$title</h1>
</header>
HEADER;

echo $header;

Summary

Heredoc strings are like double-quoted strings without escaping.
Nowdoc strings are like single-quoted strings without escaping.

?>