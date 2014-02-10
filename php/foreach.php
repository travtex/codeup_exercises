<?php

$things = ['Sgt. Pepper', "11", null, [1,2,3], 3.14, "12 + 7", false, (string) 11];

// var_dump($things);

// Parse array and output data type.

foreach ($things as $thing){
	if (is_int($thing)) {
		fwrite(STDOUT, "{$thing} is an integer." . PHP_EOL);
	} 
		elseif (is_float($thing)) {
			fwrite(STDOUT, "{$thing} is a float." . PHP_EOL);
	} 
		elseif (is_bool($thing)) {
			
			fwrite(STDOUT, "{$thing} is boolean." . PHP_EOL);
	} 
		elseif (is_array($thing)) {
			// $my_array = implode(",", $thing);
			foreach ($thing as $thinglet) {
				fwrite(STDOUT, "{$thinglet}.. ");
			} fwrite(STDOUT, " is an array." . PHP_EOL);

			// fwrite(STDOUT, "{$my_array} is an array." . PHP_EOL);
	} 
		elseif (is_null($thing)) {
			fwrite(STDOUT, "{$thing} is null." . PHP_EOL);
	} 
		elseif (is_string($thing)) {
			fwrite(STDOUT, "${thing} is a string." . PHP_EOL);
	} 
		else {
			fwrite(STDOUT, "I don't know what {$thing} is!" . PHP_EOL);
	}

}

?>