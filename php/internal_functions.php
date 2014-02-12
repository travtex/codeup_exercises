<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a funciton that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function var_is_set($variable) {

	return isset($variable) ?  'SET' :  'EMPTY';
}

// TEST: If var $nothing is set, display '$nothing is SET'

fwrite(STDIN, "\$nothing is " . var_is_set($nothing) . PHP_EOL);

// TEST: If var $something is set, display '$something is SET'

fwrite(STDIN, "\$something is " . var_is_set($something) . PHP_EOL);

// Serialize the array $array, and output the results

$serialized = serialize($array);
fwrite(STDIN, "\$array serialized is: ");
var_dump($serialized);

// Unserialize the array $array, and output the results

$unserialized = unserialize($serialized);
fwrite(STDIN, "\$array unserialized is: ");
var_dump($unserialized);

exit(0);

?>