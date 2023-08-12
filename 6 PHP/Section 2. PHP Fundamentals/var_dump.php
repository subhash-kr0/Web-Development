<?php

<p>
Summary

Use the var_dump() function to dump the information about a variable.
Wrap the output of the var_dump() function in a pre tag to make the output more readable.
The die() function terminates the script immediately.
Combine var_dump() and die() functions to dump and die.
</p>

$balance = 100;
var_dump($balance);

$balance = 100;
$message = 'Insufficient balance';

var_dump($balance);
var_dump($message);

<?php

$balance = 100;

echo '<pre>';
var_dump($balance);
echo '</pre>';

$message = 'Insufficient balance';

echo '<pre>';
var_dump($message);
echo '</pre>';


function d($data)
{
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
}

$balance = 100;
d($amount);

$message = 'Insufficient balance';
d($message);


<pre>
Dump and die using the var_dump() and die() functions

The die() function displays a message and terminates the execution of the script:

Sometimes, you want to dump the information of a variable and terminate the script immediately. In this case, you can combine the var_dump() function with the die() function as follows:
</pre>

$message = 'Dump and die example';

echo '<pre>';
var_dump($message);
echo '</pre>';
die();

echo 'After calling the die function';  // this line will not be executed