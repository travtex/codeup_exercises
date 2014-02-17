<?php

// Some of my reusable functions.

// Take an array of names and return a multidimensional array by first/last name.
function explode_names($array)
{
	$new_array = [];

	foreach($array as $name)
	{
		$new_array[] = explode(' ', $name);

	}

	return $new_array;
}

// Get user input with option to make all upper case
function get_input($upper = FALSE)
{
    
    $user_input = trim(fgets(STDIN));
    return $upper ? strtoupper($user_input) : $user_input;

}


// Returns an array pulled from an external file (text lists)
function import_data($filename)
{
    if (filesize($filename) == 0)
    {
        return FALSE;
    }
    else
    {
    $handle = fopen($filename, "r");
    $contents = fread($handle, filesize($filename));
    $content_array = explode("\n", $contents);
    fclose($handle);
    // $contents = file_get_contents($filename);
    return $content_array;

    }
}

// Pops $num entries from original array

function multipop(&$array, $num)
{
	for($count = 0; $count < $num; $count++)
	{
		array_pop($array);
	}
	return $array;
}


exit(0);
?>