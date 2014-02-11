<?php

	
if ($argc > 0) {
	
	$my_nums = $argv;
	unset($my_nums[0]);
	array_values($my_nums);

}

// var_dump($my_nums);

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

echo call_user_func_array('add', $my_nums) . PHP_EOL; 
echo call_user_func_array('subtract', $my_nums) . PHP_EOL; 
echo call_user_func_array('multiply', $my_nums) . PHP_EOL; 
echo call_user_func_array('divide', $my_nums) . PHP_EOL; 


?>
