<?php

function multipop($array, $num)
{
	$return_array = [];
	for($count = 0; $count < $num; $count++)
	{
		$return_array[] = array_pop($array);
	}
	return $return_array;
}

// Test

// $my_array = [1,2,3,4,5];

// var_dump(multipop($my_array, 3));


?>