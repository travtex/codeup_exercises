<?php

// Pops $num entries from original array

function multipop(&$array, $num)
{
	for($count = 0; $count < $num; $count++)
	{
		array_pop($array);
	}
	return $array;
}

// Test

// $my_array = [1,2,3,4,5];

// var_dump(multipop($my_array, 3));
// var_dump($my_array);

?>