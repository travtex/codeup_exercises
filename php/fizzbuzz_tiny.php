<?php

for ( $i = 1; $i <= 100; $i++) {
	echo $i % 15 ? 
		 $i % 5 ?
		 $i % 3 ?
		 $i : 'Fizz'
		    : 'Buzz'
		    : 'FizzBuzz', "\n";
}
?>