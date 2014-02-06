<?php

$count = 2;

do {
	echo $count . "\n";
	$count *= $count;
} while ($count < 1000000);

?>