<?php

<<<<<<< HEAD
print_r($argv);
=======
$options = getopt("l:h:");
//var_dump($options);
//var_dump($argv);

// echo $options["l"];
// echo $argv[0];
>>>>>>> d953c883c56e0fd40676527f65bf89bd5e62ec08

$number = 0;
$low_val = 0;
$high_val = 0;

// Optional initial arguments

if (($argc > 4) && is_numeric($options['l']) && is_numeric($options['h'])) {

	$number = mt_rand($options['l'],$options['h']);

	$low_val = intval($options['l']);
	$high_val = intval($options['h']);
	fwrite(STDOUT, PHP_EOL . "Using custom values.");
} else {
		// Default values if arguments not entered
		$number = mt_rand(1,100);
		$low_val = 1;
		$high_val = 100;
		fwrite(STDOUT, PHP_EOL . "Using default values.  Enter valid low and high values as arguments to customize.");
}

//   Testing that values are set properly

//   echo $low_val . PHP_EOL . $high_val . PHP_EOL . $number;




fwrite(STDOUT, PHP_EOL . "Guess the number, between " . $low_val . " and " . $high_val . ": ");

$user_guess = fgets(STDIN);
$guesses = 1;

// Testing that values are set properly

// echo $low_val . PHP_EOL . $high_val . PHP_EOL . $number . PHP_EOL . $user_guess . PHP_EOL;

while ($user_guess < $number || $user_guess > $number) {
	
	if ($user_guess < $low_val || $user_guess > $high_val) {
		fwrite(STDOUT, PHP_EOL . "Are you even trying?  That's not in range!" . PHP_EOL .
			"Guess again: ");

	} elseif ($user_guess > $number) {
		fwrite(STDOUT, PHP_EOL . "That's too high.  Try again: ");

	} else {
		fwrite(STDOUT, PHP_EOL . "That's too low.  Try again: ");

	}
			$user_guess = fgets(STDIN);
			$guesses++;
}


// Output the number of guesses
fwrite(STDOUT, PHP_EOL . "That's it!!" . PHP_EOL . "You're BRILLIANT!! " .
			"Or... lucky, or something!" . PHP_EOL . "It took you " . $guesses . " tries." 
			. PHP_EOL);

exit(0);

?>