<?php 

$large = 8;
$medium = 6;
$small = 4;
$slices = 0;

function get_input($upper = FALSE)
{
    
    $user_input = trim(fgets(STDIN));
    return $upper ? strtoupper($user_input) : $user_input;

}

function get_slice()
{

	echo "How many guests eat only 1 slice of pizza?: ";
	$slices = get_input();

	echo "How many guests eat 2 slices of pizza?: ";
	$slices += get_input() * 2;

	echo "How many guests eat 3 slices of pizza?: ";
	$slices += get_input() * 3;

	echo "How many guests eat 4 slices of pizza?: ";
	$slices += get_input() * 4;
	return $slices;
}

//var_dump($slices);

$slices = get_slice();

echo "You're going to need:" . PHP_EOL . PHP_EOL;

$need_large = $slices/8;
$slices = $slices%$large;
$need_medium = $slices/6;
$slices = $slices%$medium;
$need_small = $slices/4;
$slices = $slices%$small;

if ($slices == 0)
{
	echo "Large Pizzas: " . intval($need_large) . PHP_EOL;
	echo "Medium Pizzas: " . intval($need_medium) . PHP_EOL;
	echo "Small Pizzas: " . intval($need_small) . PHP_EOL;
}
else 
{
	$need_small++;
	echo "Large Pizzas: " . intval($need_large) . PHP_EOL;
	echo "Medium Pizzas: " . intval($need_medium) . PHP_EOL;
	echo "Small Pizzas: " . intval($need_small) . PHP_EOL;
}




// var_dump($slices);
// var_dump($need_large);
// var_dump($need_medium);
// echo intval($need_small);

?>