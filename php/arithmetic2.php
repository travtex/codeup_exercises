<?php

	
if ($argc > 1) {
	
	$my_nums = $argv;
	unset($my_nums[0]);
	array_values($my_nums);

}
	else {
		$my_nums = [5, 4, 3, 2, 1];
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
	} 
	elseif ($numargs == 1) {
		$sum = $args[0] + $args[0];
	}

	return $sum;
}


function subtract() {
	$args = func_get_args();
	$numargs = func_num_args();
	$diff = $args[0];
	unset($args[0]);
	array_values($args);

	if($numargs >=2){
		foreach ($args as $arg){
			$diff -= $arg;
		} 
		
	} 
	elseif ($numargs == 1) {
		$diff = ($args[0] - $args[0]);
	} 
	
	return $diff;
}


function multiply() {
	$args = func_get_args();
	$numargs = func_num_args();
	$product = 1;

	if (in_array(0, $args)) {
		return 0;
	}
	
	elseif ($numargs >=2){
		foreach ($args as $arg){
			$product *= $arg;
		} 
	
	} 
	
	elseif ($numargs == 1) {
		$product = ($args[0] * $args[0]);
	} 
	
	else {
		$product = 0;
	}
	
	return $product;
}


function divide() {
	$args = func_get_args();
	$numargs = func_num_args();
	$answer = $args[0];
	unset($args[0]);
	array_values($args);

	if(in_array(0, $args)) {
		return "** ERROR ** Cannot divide by zero." . PHP_EOL;
	}

	elseif ($numargs >=2){
		foreach ($args as $arg){
			$answer /= $arg;
		} 
		
	} 
	
	elseif ($numargs == 1) {
			$answer = ($args[0] / $args[0]);
	} 
	
	else {
			$answer = 0;
		}
		return $answer;
}

echo call_user_func_array('add', $my_nums) . PHP_EOL; 
echo call_user_func_array('subtract', $my_nums) . PHP_EOL; 
echo call_user_func_array('multiply', $my_nums) . PHP_EOL; 
echo call_user_func_array('divide', $my_nums) . PHP_EOL; 

exit(0);

?>
