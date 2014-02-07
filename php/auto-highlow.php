<?php

fwrite(STDOUT, "Enter the lowest number for the computer to guess: ");
$low_guess = trim(fgets(STDIN));

// Validate low number

while (!is_numeric($low_guess)) {
	fwrite(STDOUT, "That isn't a number! Try again: ");
	$low_guess = trim(fgets(STDIN));
}

fwrite(STDOUT, "Enter the highest number for the computer to guess: ");
$high_guess = trim(fgets(STDIN));

// Validate high number

while (!is_numeric($high_guess) || intval($high_guess) <= intval($low_guess)) {
	fwrite(STDOUT, "Invalid entry!  Please enter a number higher than {$low_guess}: ");
	$high_guess = trim(fgets(STDIN));
}

// Set initial random number and initial computer guess

$number = mt_rand(intval($low_guess), intval($high_guess));
$user_guess = mt_rand(intval($low_guess), intval($high_guess));
$guesses = 1;

fwrite(STDOUT, "Computer guesses " . $user_guess . PHP_EOL);

// Computer guesses until correct

do {

	if ($user_guess > $number){
			fwrite(STDOUT, PHP_EOL . "That's too high." . PHP_EOL);
			$high_guess = ($user_guess - 1);
			

		}  else {
				fwrite(STDOUT, PHP_EOL . "That's too low." . PHP_EOL);
				$low_guess = ($user_guess + 1);
				
		}
					$user_guess = mt_rand(intval($low_guess), intval($high_guess));
					fwrite(STDOUT, "Computer guesses " . $user_guess . PHP_EOL);
					$guesses++;
	} while(($user_guess < $number) || ($user_guess > $number));

fwrite(STDOUT, PHP_EOL . "That's it!!" . PHP_EOL . "You're BRILLIANT!! " .
			"Or... lucky, or something!" . PHP_EOL . "It took you " . $guesses . " tries." 
			. PHP_EOL);

exit(0);

?>