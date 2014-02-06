<?php

$count = 2;

do {
	printf("%10d\n", $count . "\n");
	$count *= $count;
} while ($count < 1000000);

?>