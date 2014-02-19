<?php

function is_pal($string)
{
	$string = preg_replace(array('~[:;!?]|[.,](?![0-9])|\'s~', '/\s+/'), array('', ' '), $string);
	$string_array = str_split($string);
	array_reverse($string_array);
	$rev_string = implode($string_array);
	return ($string == $rev_string) ? TRUE : FALSE;

}

function get_input($upper = FALSE)
{
    
    $user_input = trim(fgets(STDIN));
    return $upper ? strtoupper($user_input) : $user_input;

}

echo PHP_EOL . "Enter the phrase to check for palindromes: ";
$check_string = get_input();

echo PHP_EOL. "The phrase " . $check_string . ' ';

if(is_pal($check_string) == TRUE)
{
	echo "is a palindrome." . PHP_EOL;
}
else
{
	echo "is not a palindrome." . PHP_EOL;
}

exit(0);

?>