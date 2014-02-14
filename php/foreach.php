<?php

$things = ['Sgt. Pepper', "11", null, [1,2,3], 3.14, "12 + 7", false, (string) 11];

// var_dump($things);

// Parse array and output data type.

foreach ($things as $thing){
	if (is_int($thing)){
		fwrite(STDOUT, "{$thing} is an integer.");
	}
		elseif (is_float($thing)){
			fwrite(STDOUT, "{$thing} is a float.");
		}
		elseif (is_bool($thing)){
			fwrite(STDOUT, "(Here Be Booleans.)");
		}
		elseif (is_array($thing)){

			// $my_array = implode(",", $thing);
			foreach($thing as $thinglet){
				fwrite(STDOUT, "{$thinglet}..");
			}
				fwrite(STDOUT, " is in an array.");
		}
		elseif (is_null($thing)){
			fwrite(STDOUT, " ... NoThInGnEsS ...");
		}
		elseif (is_string($thing)){
			fwrite(STDOUT, "\"{$thing}\" is a string.");
		}
	fwrite(STDOUT, PHP_EOL);
	}

exit(0);

?>