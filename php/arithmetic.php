<?php

if($argc > 1) {
	$a = $argv[1];
	$b = $argv[2];
} else {
	$a = 100;
	$b = 10;
}

// function error($num1, $num2) {
// 	return fwrite(STDIN, "** Both \$args must be numeric." . PHP_EOL .
// 			"You entered {$num1} and {$num2}." . PHP_EOL);
// }

function error($num1, $num2) {

	$nums = [$num1, $num2];
	$error = [];
	foreach ($nums as $num) {
		$error[] = fwrite(STDOUT, "** ERROR ** $num is not numeric." . PHP_EOL);
		}
		return $error;
}

function add($num1, $num2) {
	if (is_numeric($num1) && is_numeric($num2)) {
    fwrite(STDIN, ($num1 + $num2) . PHP_EOL);
	}
	else {
		error($num1, $num2);
	}
}

function subtract($num1, $num2) {
	if (is_numeric($num1) && is_numeric($num2)) {
	fwrite(STDIN, ($num1 - $num2) . PHP_EOL);
	}
	else {
		error($num1, $num2);
	}
}

function multiply($num1, $num2) {
	if (is_numeric($num1) && is_numeric($num2)) {
	fwrite(STDIN, ($num1 * $num2) . PHP_EOL);
	}
	else {
		error($num1, $num2);

	}
}

function divide($num1, $num2) {
	if ($num2 === 0){
		fwrite(STDIN, "** Cannot divide by zero." . PHP_EOL);
	}
		elseif (is_numeric($num1) && is_numeric($num2)) {
			fwrite(STDIN, ($num1 / $num2) . PHP_EOL);
		}
		else {
			error($num1, $num2);
		}
}

function mod($num1, $num2) {
	if ($num2 === 0) {
		fwrite(STDIN, "** Cannot divide by zero." . PHP_EOL);
	}
		elseif (is_numeric($num1) && is_numeric($num2)){
			fwrite(STDIN, ($num1 % $num2) . PHP_EOL);
		} 
		else {
			error($num1, $num2);
		}
}

add($a, $b);
subtract($a, $b);
multiply($a, $b);
divide($a, $b);
mod($a, $b);

?>
