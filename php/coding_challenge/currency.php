<?php

$dollars = '';
$euro = $dollars * 0.73;
$pounds = $dollars * 0.6;
$pesos = $dollars * 13;

function get_input($upper = FALSE)
{
    
    $user_input = trim(fgets(STDIN));
    return $upper ? strtoupper($user_input) : $user_input;

}

echo "Enter the amount that you wish to convert: ";
$dollars = get_input();

echo "What currency do you want to convert to?" . PHP_EOL;
echo "(E)uros, (P)esos, (B)ritish Pounds: ";

$convert = get_input(TRUE);

if ($convert == 'E')
{
	echo $dollars . " USD is " . $dollars * 0.73 . " euros." . PHP_EOL;
}
elseif ($convert == 'P')
{
	echo $dollars . " USD is " . $dollars * 13 . " pesos." . PHP_EOL;
}
elseif ($convert == 'B')
{
	echo $dollars . " USD is " . $dollars * 0.6 . " pounds." . PHP_EOL;
}
exit(0);
?>