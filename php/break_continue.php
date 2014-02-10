<?php

for ($i = 0; $i <= 100; $i++) {
	
	fwrite(STDOUT, $i);
		if ($i % 2 == 0) {
			fwrite(STDOUT, " <--EVEN NUMBER!" . PHP_EOL);
			continue;
		} 

		fwrite(STDOUT, PHP_EOL);
	}

fwrite (STDOUT, PHP_EOL);

for ($i = 0; $i <= 100; $i++) {
	fwrite (STDOUT, $i . ".. ");
		if ($i >= 10) {
			fwrite(STDOUT, "aaaaaand BREAK!" . PHP_EOL . PHP_EOL);
			break;
	}
}

exit(0);

?>



