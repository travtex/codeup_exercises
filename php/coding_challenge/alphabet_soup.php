<?php

function get_input($upper = FALSE)
{
    
    $user_input = trim(fgets(STDIN));
    return $upper ? strtoupper($user_input) : $user_input;

}

function alphabetize($str)
{
	$str_array = [];
	$str_multi = [];
	$return_string = '';
	$str_array = explode(' ', $str);

	foreach($str_array as $word)
	{
		$str_multi[] = str_split($word);
	}

	foreach($str_multi as $word_array)
	{
		sort($word_array);
		$return_string .= implode($word_array) . ' ';

	}
	return $return_string;
}



fwrite(STDIN, PHP_EOL . "Please enter the phrase to REVERSO-IZE: ");
$string = get_input();
fwrite(STDIN, PHP_EOL . (alphabetize($string)) . PHP_EOL);



?>