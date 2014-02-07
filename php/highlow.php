<?php

$number = mt_rand(1,100);

fwrite(STDOUT, PHP_EOL . "I'm thinking of a number between 1 and 100." . PHP_EOL);
fwrite(STDOUT, "Guess the number: ");

$user_guess = fgets(STDIN);
$guesses = 1;

do {
	// Ensure valid number entered.
	if (($user_guess < 1) || ($user_guess > 100)) {
		fwrite(STDOUT, PHP_EOL . "You're not even trying!" . PHP_EOL);
		fwrite(STDOUT, "Try again: ");
		$user_guess = fgets(STDIN);
	} // Give higher or lower hints
		elseif($user_guess > $number){
			fwrite(STDOUT, PHP_EOL . "That's too high." . PHP_EOL);
			fwrite(STDOUT, "Try again: ");
			$user_guess = fgets(STDIN);
			$guesses++;

		}  else {
				fwrite(STDOUT, PHP_EOL . "That's too low." . PHP_EOL);
				fwrite(STDOUT, "Try again: ");
				$user_guess = fgets(STDIN);
				$guesses++;
		}
	} while(($user_guess < $number) || ($user_guess > $number));
// Output the number of guesses
fwrite(STDOUT, PHP_EOL . "That's it!!" . PHP_EOL . "You're BRILLIANT!! " .
			"Or... lucky, or something!" . PHP_EOL . "It took you " . $guesses . " tries." 
			. PHP_EOL);

exit(0);

?>