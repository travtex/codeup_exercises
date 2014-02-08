<?php

for ($i = 1; $i <= 100; $i++) {
	if (($i % 3 == 0) && ($i % 5 == 0)) {
		fwrite(STDOUT, "FizzBuzz" . PHP_EOL);
	} elseif ($i % 5 == 0) {
		fwrite(STDOUT, "Buzz" . PHP_EOL);
	} elseif ($i % 3 == 0) {
		fwrite(STDOUT, "Fizz" . PHP_EOL);
	} else {
		fwrite(STDOUT, $i . PHP_EOL);
	}
}

exit(0);

?>