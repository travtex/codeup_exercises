<?php

function display_array($array)
{
	foreach($array as $key => $value)
	{
		if(is_array($value))
		{
			display_array($value);
			// echo "\t";
		}
		else 
		{
			if(array_key_exists($value, $array))
			{
				echo "\t{$key} : $value" . PHP_EOL;
			}
			else
			{
				echo "{$value}" . PHP_EOL;
			}
		}
	}
}


$test_array =['array1' => [ 'item1' => 1,2,3],[4,5,6, ['a','b','c']],'Hi',[7,8,9]];

display_array($test_array);

?>