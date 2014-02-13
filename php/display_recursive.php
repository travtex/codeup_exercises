<?php

function display_array($array)
{
	foreach($array as $key => $value)
	{
		if(is_array($value))
		{
			echo "{$key}:" . PHP_EOL;
			display_array($value);
			// echo "\t";
			
		}
		else 
		{
			if(array_key_exists($value, $array))
			{
				echo "{$key} : $value" . PHP_EOL;
			}
			else
			{
				echo "{$value}" . PHP_EOL;
			}
		}
	}
}


$test_array =['Array 1' => [1,2,3], 'Array 2' => [4,5,6]];

display_array($test_array);

?>