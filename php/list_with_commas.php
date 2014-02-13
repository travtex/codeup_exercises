<?php

function get_input($upper = FALSE)
{
    
    $user_input = trim(fgets(STDIN));
    return $upper ? strtoupper($user_input) : $user_input;

}

function humanized_list($array, $alpha = FALSE)
{
	$last_item = '';
	
	if ($alpha == TRUE)
	{
		asort($array);
		$last_item = array_pop($array);
	}	
	else
	{
		$last_item = array_pop($array);
	}

	return implode(', ' , $array) . ", and {$last_item}";
}

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicists_array = explode(', ', $physicists_string);

echo PHP_EOL . "Do you want the list alphabetical? (Y/N): ";

$input = get_input(TRUE);

	$input == 'Y'   ? $famous_fake_physicists = humanized_list($physicists_array, TRUE)
					: $famous_fake_physicists = humanized_list($physicists_array);

	

echo PHP_EOL . "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}."
	. PHP_EOL;

?>