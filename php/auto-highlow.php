<?php

$number = mt_rand(1,100);

fwrite(STDOUT, PHP_EOL . "I'm thinking of a number between 1 and 100." . PHP_EOL);
fwrite(STDOUT, "Guess the number: " . PHP_EOL);

$user_guess = mt_rand(1,100);
$low_guess = 1;
$high_guess = 100;
$guesses = 1;

fwrite(STDOUT, "Computer guesses " . $user_guess . PHP_EOL);

do {

	if ($user_guess > $number){
			fwrite(STDOUT, PHP_EOL . "That's too high." . PHP_EOL);
			$high_guess = ($user_guess - 1);
			$user_guess = mt_rand($low_guess, $high_guess);
			fwrite(STDOUT, "Computer guesses " . $user_guess . PHP_EOL);
			$guesses++;

		}  else {
				fwrite(STDOUT, PHP_EOL . "That's too low." . PHP_EOL);
				$low_guess = ($user_guess + 1);
				$user_guess = mt_rand($low_guess, $high_guess);
				fwrite(STDOUT, "Computer guesses " . $user_guess . PHP_EOL);
				$guesses++;
		}
	} while(($user_guess < $number) || ($user_guess > $number));

fwrite(STDOUT, PHP_EOL . "That's it!!" . PHP_EOL . "You're BRILLIANT!! " .
			"Or... lucky, or something!" . PHP_EOL . "It took you " . $guesses . " tries." 
			. PHP_EOL);

exit(0);

?>