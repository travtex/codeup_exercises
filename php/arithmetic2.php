<?php


function add() {
	$args = func_get_args();
	$numargs = func_num_args();
	$sum = 0;

	if($numargs >=2){
		foreach ($args as $arg){
			$sum += $arg;
		}
	} elseif ($numargs == 1) {
		$sum = $args[0] + $args[0];
	}

	return $sum;
}

echo add(5,4,3,2,1) . PHP_EOL; 

function subtract() {
	$args = func_get_args();
	$numargs = func_num_args();
	$diff = 0;

	if($numargs >=2){
		foreach ($args as $arg){
			$diff -= $arg;
		} 
		
	} elseif ($numargs == 1) {
		$diff = ($args[0] - $args[0]);
	} 
	return $diff;
}

echo subtract(5,4,3,2,1) . PHP_EOL; 

function multiply() {
	$args = func_get_args();
	$numargs = func_num_args();
	$product = 1;

	if($numargs >=2){
		foreach ($args as $arg){
			$product *= $arg;
		} 
	
	} elseif ($numargs == 1) {
		$product = ($args[0] * $args[0]);
	} else {
		$product = 0;
	}
	return $product;
}

echo multiply(5,4,3,2,1) . PHP_EOL; 

function divide() {
	$args = func_get_args();
	$numargs = func_num_args();
	$answer = 1;

	if($numargs >=2){
		foreach ($args as $arg){
			$answer /= $arg;
		} 
		
		} elseif ($numargs == 1) {
			$answer = ($args[0] / $args[0]);
		} else {
			$answer = 0;
		}
		return $answer;
}

echo divide(5,4,3,2,1) . PHP_EOL; 


?>
