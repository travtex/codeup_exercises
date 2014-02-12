<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function check_name($name, $array)
{
	// return in_array($name, $array);
	if (is_numeric(array_search($name, $array)))
	{
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}

function compare_names($array1, $array2)
{
	$counter = 0;
	foreach($array1 as $key => $name)
	{
		if (check_name($name, $array2) == TRUE)
		{
			$counter++;
		}
	}
	return $counter;
}

echo PHP_EOL . "Is the name 'Tina' in the \$names array?" . PHP_EOL;
var_dump(check_name('Tina', $names));
echo "Is the name 'Bob' in the \$names array?" . PHP_EOL;
var_dump(check_name('Bob', $names));

echo PHP_EOL . "The \$names and the \$compare arrays share " . compare_names($names, $compare)
. " names." . PHP_EOL;

?>