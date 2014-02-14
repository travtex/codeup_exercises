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

function to_english($piglatin)
{
	$pig_array = explode(' ', $piglatin);
	$english_words = [];

	foreach($pig_array as $word)
		{
			$first = substr($word, 0, 1);
			if(ctype_upper($first))
			{
				$first = strtolower($first);
				$new_cap = strtoupper(substr($word, -3, 1));
			}
			else 
			{
				$new_cap = (substr($word, -3, 1));
			}

			$eng_word = substr($word, 1, -3);
			$english_words[] = $new_cap . $first . $eng_word;
		}	
		return $english_words;
}

echo PHP_EOL . "Do you want to start with (E)nglish or (P)ig Latin?: ";
$choose = get_input(TRUE);

switch($choose)
{
	case 'E':
		echo PHP_EOL . "Enter the english phrase to convert: ";
		$english = get_input();
		$pig_latin = pig_latin($english);
		echo PHP_EOL . implode(' ', $pig_latin) . PHP_EOL;
		break;

	case 'P':
		echo PHP_EOL. "Enter the pig-latin phrase to convert: ";
		$piggy = get_input();
		$english = to_english($piggy);
		echo PHP_EOL . implode(' ', $english) . PHP_EOL;
}


exit(0);

?>