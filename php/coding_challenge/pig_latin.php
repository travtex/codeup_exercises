<?php

function get_input($upper = FALSE)
{
    
    $user_input = trim(fgets(STDIN));
    return $upper ? strtoupper($user_input) : $user_input;

}

function pig_latin($english)
{
	$english_array = explode(' ', $english);
	$pigword = [];

	foreach($english_array as $word)
	{
		$first = substr($word, 0, 1);
		if (ctype_upper($first))
		{
			$first = strtolower($first);
			$second = strtoupper(substr($word,1,1));
		}
		else
		{
			$second = substr($word,1,1);
		}
		$pigword[] = $second . substr($word,2) . $first . 'ay';
	}
	return $pigword;
}

echo PHP_EOL . "Enter the english phrase to convert: ";
$english = get_input();

$pig_latin = pig_latin($english);

echo PHP_EOL . implode(' ', $pig_latin) . PHP_EOL;

?>