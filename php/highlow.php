<?php

$number = rand(1,100);

fwrite(STDOUT, PHP_EOL . "I'm thinking of a number between 1 and 100." . PHP_EOL);
fwrite(STDOUT, "Guess the number: ");

$user_guess = fgets(STDIN);

while (($user_guess < 1) || ($user_guess > 100)) {
	fwrite(STDOUT, PHP_EOL . "You're not even trying!" . PHP_EOL);
	fwrite(STDOUT, "Try again: ");
	$user_guess = fgets(STDIN);
}

do {

	if (($user_guess < 1) || ($user_guess > 100)) {
		fwrite(STDOUT, PHP_EOL . "You're not even trying!" . PHP_EOL);
		fwrite(STDOUT, "Try again: ");
		$user_guess = fgets(STDIN);
	}
		elseif($user_guess > $number){
			fwrite(STDOUT, PHP_EOL . "That's too high." . PHP_EOL);
			fwrite(STDOUT, "Try again: ");
			$user_guess = fgets(STDIN);

		}  else {
				fwrite(STDOUT, PHP_EOL . "That's too low." . PHP_EOL);
				fwrite(STDOUT, "Try again: ");
				$user_guess = fgets(STDIN);
		}
	} while(($user_guess < $number) || ($user_guess > $number));

fwrite(STDOUT, PHP_EOL . "That's it!!" . PHP_EOL . "You're BRILLIANT!!" .
			"Or... lucky, or something!" . PHP_EOL);

exit(0);

?>