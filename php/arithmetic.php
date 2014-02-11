<?php

if($argc > 1) {
	$a = $argv[1];
	$b = $argv[2];
} else {
	$a = 100;
	$b = 10;
}


function add($num1, $num2) {
    fwrite(STDIN, ($num1 + $num2) . PHP_EOL);
}

function subtract($num1, $num2) {
	fwrite(STDIN, ($num1 - $num2) . PHP_EOL);
}

function multiply($num1, $num2) {
	fwrite(STDIN, ($num1 * $num2) . PHP_EOL);
}

function divide($num1, $num2) {
	fwrite(STDIN, ($num1 / $num2) . PHP_EOL);
}

function mod($num1, $num2) {
	fwrite(STDIN, ($num1 % $num2) . PHP_EOL);
}

add($a, $b);
subtract($a, $b);
multiply($a, $b);
divide($a, $b);
mod($a, $b);

?>
