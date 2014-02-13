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
			echo "\t" . $value . PHP_EOL;
		}
	}
}


$test_array =[[1,2,3],[4,5,6, ['a','b','c']],'Hi',[7,8,9]];

display_array($test_array);

?>