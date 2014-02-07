<?php

fwrite(STDOUT, "Enter the lowest number for the computer to guess: ");
$low_guess = fgets(STDIN);

/*if (is_numeric($low_guess)) {
	continue;
	} else {
		fwrite(STDOUT, "That isn't a number!  Try again: ");
		$low_guess = fgets(STDIN);
}
*/
fwrite(STDOUT, "Enter the highest number for the computer to guess: ");
$high_guess = fgets(STDIN);

/*if ((is_int($high_guess)) && ($high_guess > $low_guess)) {
	continue;
} elseif ($high_guess <= $low_guess) {
	fwrite(STDOUT, "Must enter a value greater than " . $low_guess . "!  Try again: ");
	$high_guess = fgets(STDIN);
} else {
	fwrite(STDOUT, "That isn't a number!  Try again: ");
	$high_guess = fgets(STDIN);
}
*/
$number = mt_rand(intval($low_guess), intval($high_guess));
$user_guess = mt_rand(intval($low_guess), intval($high_guess));
$guesses = 1;

fwrite(STDOUT, "Computer guesses " . $user_guess . PHP_EOL);

do {

	if ($user_guess > $number){
			fwrite(STDOUT, PHP_EOL . "That's too high." . PHP_EOL);
			$high_guess = ($user_guess - 1);
			$user_guess = mt_rand(intval($low_guess), intval($high_guess));
			fwrite(STDOUT, "Computer guesses " . $user_guess . PHP_EOL);
			$guesses++;

		}  else {
				fwrite(STDOUT, PHP_EOL . "That's too low." . PHP_EOL);
				$low_guess = ($user_guess + 1);
				$user_guess = mt_rand(intval($low_guess), intval($high_guess));
				fwrite(STDOUT, "Computer guesses " . $user_guess . PHP_EOL);
				$guesses++;
		}
	} while(($user_guess < $number) || ($user_guess > $number));

fwrite(STDOUT, PHP_EOL . "That's it!!" . PHP_EOL . "You're BRILLIANT!! " .
			"Or... lucky, or something!" . PHP_EOL . "It took you " . $guesses . " tries." 
			. PHP_EOL);

exit(0);

?>