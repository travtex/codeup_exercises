<?php


function add() {
	$args = func_get_args();
	$numargs = func_num_args();
	$sum = 0;

	if($numargs >=2){
		foreach ($args as $arg){
			$sum += $arg;
		} return $sum;
		
		} elseif ($numargs == 1) {
			return $args[0] + $args[0];
		} else {
			return 0;
		}
}

echo add(5,4,3,2,1) . PHP_EOL; 

function subtract() {
	$args = func_get_args();
	$numargs = func_num_args();
	$diff = 0;

	if($numargs >=2){
		foreach ($args as $arg){
			$diff -= $arg;
		} return $diff;
		
		} elseif ($numargs == 1) {
			return ($args[0] - $args[0]);
		} else {
			return 0;
		}
}

echo subtract(5,4,3,2,1) . PHP_EOL; 

function multiply() {
	$args = func_get_args();
	$numargs = func_num_args();
	$product = 1;

	if($numargs >=2){
		foreach ($args as $arg){
			$product *= $arg;
		} return $product;
		
		} elseif ($numargs == 1) {
			return ($args[0] * $args[0]);
		} else {
			return 0;
		}
}

echo multiply(5,4,3,2,1) . PHP_EOL; 

function divide() {
	$args = func_get_args();
	$numargs = func_num_args();
	$answer = 1;

	if($numargs >=2){
		foreach ($args as $arg){
			$answer /= $arg;
		} return $answer;
		
		} elseif ($numargs == 1) {
			return ($args[0] / $args[0]);
		} else {
			return 0;
		}
}

echo divide(5,4,3,2,1) . PHP_EOL; 


?>
