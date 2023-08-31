<?php

echo 'Hello, World!';

$message = "Hello";
echo $message;

if( $is_new_user ) {
    send_welcome_email();
}

function send_welcome_email() {
    echo 'Welcome!';
}

<pre>In most cases, whitespace and line breaks don’t have special meaning in PHP. Therefore, you can place a statement in one line or span it across multiple lines.</pre>

login( $username, $password );
login( 
    $username,
    $password
 );

<p>
Summary

PHP is partially case-sensitive.
PHP constructs, function names, class names are case-insensitive, whereas variables are case-sensitive.
A statement ends with a semicolon (;).
Whitespace and line breaks don’t matter in PHP; do leverage them to make the code more readable.
</p>

?>