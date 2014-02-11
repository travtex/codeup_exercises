<?php

if($argc > 1) {
	$a = $argv[1];
	$b = $argv[2];
} else {
	$a = 100;
	$b = 10;
}


function add($num1, $num2) {
	if (is_numeric($num1) && is_numeric($num2)) {
    fwrite(STDIN, ($num1 + $num2) . PHP_EOL);
	}
	else {
		fwrite(STDIN, "** Both \$args must be numeric." . PHP_EOL);
	}
}

function subtract($num1, $num2) {
	if (is_numeric($num1) && is_numeric($num2)) {
	fwrite(STDIN, ($num1 - $num2) . PHP_EOL);
	}
	else {
		fwrite(STDIN, "** Both \$args must be numeric." . PHP_EOL);
	}
}

function multiply($num1, $num2) {
	if (is_numeric($num1) && is_numeric($num2)) {
	fwrite(STDIN, ($num1 * $num2) . PHP_EOL);
	}
	else {
		fwrite(STDIN, "** Both \$args must be numeric." . PHP_EOL);

	}
}

function divide($num1, $num2) {
	if ($num2 == 0){
		fwrite(STDIN, "** Cannot divide by zero." . PHP_EOL);
	}
		elseif (is_numeric($num1) && is_numeric($num2)) {
		fwrite(STDIN, ($num1 / $num2) . PHP_EOL);
		}
		else {
			fwrite(STDIN, "** Both \$args must be numeric." . PHP_EOL);

		}
}

function mod($num1, $num2) {
	if ($num2 == 0) {
		fwrite(STDIN, "** Cannot divide by zero." . PHP_EOL);
	}
		elseif (is_numeric($num1) && is_numeric($num2)){
		fwrite(STDIN, ($num1 % $num2) . PHP_EOL);
		} 
		else {
			fwrite(STDIN, "** Both \$args must be numeric." . PHP_EOL);

		}
}

add($a, $b);
subtract($a, $b);
multiply($a, $b);
divide($a, $b);
mod($a, $b);

?>
