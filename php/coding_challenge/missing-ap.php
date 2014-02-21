<?php

$input = "-1 -11 -31 -41 -51";
$input_array = explode(' ', $input);
$return_array = [];
 
for ($i = 1; $i < count($input_array); $i++) {
	$return_array[] = $input_array[$i] - $input_array[$i-1];
}


for ($i = 1; $i < count($input_array); $i++) {
	
		if(max($return_array) > 0){
			if($input_array[$i] - $input_array[$i-1] == max($return_array)){

				$missing = ($input_array[$i] - max($return_array)/2);
			} 
		}
		else {
			if($input_array[$i] - $input_array[$i-1] == min($return_array)){
				$missing = ($input_array[$i] - min($return_array)/2);
			}
		}

	
}

var_dump(min($return_array)/2);
echo intval($missing). PHP_EOL;

?>