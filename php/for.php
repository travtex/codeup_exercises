<?php

fwrite(STDOUT, "Please enter the starting number: ");
$low = trim(fgets(STDIN));

while(!is_numeric($low)){
	fwrite(STDOUT, "That isn't a number.  Please enter the starting number: ");
	$low = trim(fgets(STDIN));
}

fwrite(STDOUT, "Please enter the ending number: ");
$high = trim(fgets(STDIN));

while(!is_numeric($high) || intval($high) < intval($low)){
	fwrite(STDOUT, "Invalid value.  Please enter a number greater than " . $low .": ");
	$high = trim(fgets(STDIN));
}

fwrite(STDOUT, "Please enter an increment to count by: ");
$increment = trim(fgets(STDIN));

while(!is_numeric($increment) || $increment < 1 || $increment > $high) {
	fwrite(STDOUT, "Invalid increment.  Please enter a number between 1 and " . $high . ": ");
	$increment = trim(fgets(STDIN));
}

for($i = $low; ($i <= $high); $i += $increment) {
	echo intval($i) . PHP_EOL;
}