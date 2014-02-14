<?php 

$large = 8;
$medium = 6;
$small = 4;

function get_input($upper = FALSE)
{
    
    $user_input = trim(fgets(STDIN));
    return $upper ? strtoupper($user_input) : $user_input;

}

echo "How many guests eat only 1 slice of pizza?: ";
$slices = get_input();

echo "How many guests eat 2 slices of pizza?: ";
$slices += get_input() * 2;

echo "How many guests eat 3 slices of pizza?: ";
$slices += get_input() * 3;

echo "How many guests eat 4 slices of pizza?: ";
$slices += get_input() * 4;

//var_dump($slices);

echo "You're going to need:" . PHP_EOL . PHP_EOL;

$need_large = intval($slices/8);

$slices = $slices%$large;

echo "Large Pizzas: " . $need_large . PHP_EOL;


if ($slices >= 4)
{
	$need_medium = intval($slices/6);
	$slices = $slices%$medium;
	echo "Medium Pizzas: " . $need_medium . PHP_EOL;
	$need_small = intval($slices/4);
	$slices = $slices%$small;
	echo "Small Pizzas: " . $need_small . PHP_EOL;

if($slices >0)
{
	echo "Small Pizzas: 1" . PHP_EOL;
}


	

}


//var_dump($slices);

?>