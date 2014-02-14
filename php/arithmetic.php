<?php

if($argc > 1) {
	$a = $argv[1];
	$b = $argv[2];
} else {
	$a = 100;
	$b = 10;
}

// function numIsValid($num, &$error = '') {

// }

function error($num1, $num2) {

	$nums = [$num1, $num2];
	
	foreach ($nums as $num) {
		if (!is_numeric($num)){
			fwrite(STDOUT, "** ERROR ** $num is not numeric." . PHP_EOL);
		}
	}
		
}

function add($num1, $num2) {
	if (is_numeric($num1) && is_numeric($num2)) {
	    return $num1 + $num2;
	}
		else {
			error($num1, $num2);
		}
}

function subtract($num1, $num2) {
	if (is_numeric($num1) && is_numeric($num2)) {
		return $num1 - $num2;
	}
		else {
			error($num1, $num2);
		}
}

function multiply($num1, $num2) {
	if (is_numeric($num1) && is_numeric($num2)) {
		return $num1 * $num2;
	}
		else {
			error($num1, $num2);

		}
}

function divide($num1, $num2) {
	if (empty($num2)){
		fwrite(STDIN, "** Cannot divide by zero." . PHP_EOL);
		return false;
	}
		elseif (is_numeric($num1) && is_numeric($num2)) {
			return $num1 / $num2;
		}
		else {
			error($num1, $num2);
		}
}

function mod($num1, $num2) {
	if (empty($num2)) {
		fwrite(STDIN, "** Cannot divide by zero." . PHP_EOL);
		return false;
	}
		
		elseif (is_numeric($num1) && is_numeric($num2)){
			return $num1 % $num2;
		} 
		else {
			error($num1, $num2);
		}
}

fwrite(STDIN, add($a, $b) . PHP_EOL);
fwrite(STDIN, subtract($a, $b) . PHP_EOL);
fwrite(STDIN, multiply($a, $b) . PHP_EOL);
fwrite(STDIN, divide($a, $b) . PHP_EOL);
fwrite(STDIN, mod($a, $b) . PHP_EOL);

exit(0);

?>
