<?php 



function explode_names($array)
{
	$new_array = [];

	foreach($array as $name)
	{
		$keys = ['first_name', 'last_name'];
		$new_array[] = explode(' ', $name);

	}

	return $new_array;
}

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicists_array = explode(', ', $physicists_string);

$names_array = explode_names($physicists_array);

// var_dump($names_array);

foreach ($names_array as $key => $row) {
    $first[$key]  = $row[0];
    $last[$key] = $row[1];
}

// var_dump($last);

var_dump($names_array);
array_multisort($last, SORT_ASC, $names_array);
var_dump($names_array);

?>