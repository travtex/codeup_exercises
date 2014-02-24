<?php

// Get the computer's choice.
function getChoice() {
	$choice = mt_rand(1,3);
	switch($choice) {
		case 1: 
			return 'rock';
			break;
		case 2:
			return 'paper';
			break;
		case 3:
			return 'scissors';
	}
}

do {

	echo "Choose (R)ock, (P)aper, or (S)cissors: ";
	$user_choice = strtoupper(trim(fgets(STDIN)));
	$computer_choice = getChoice();

	echo "1... \n 2... \n  3!!" . PHP_EOL;

	if($user_choice == 'R' && $computer_choice == 'rock') {
		echo PHP_EOL . "The computer chose Rock.  You tie." . PHP_EOL;
	} elseif ($user_choice == 'R' && $computer_choice == 'paper') {
		echo PHP_EOL . "The computer chose Paper.  You lose." . PHP_EOL;
	} elseif ($user_choice == 'R' && $computer_choice == 'scissors') {
		echo PHP_EOL . "The computer chose Scissors.  You win!" . PHP_EOL;
	} elseif ($user_choice == 'P' && $computer_choice == 'rock') {
		echo PHP_EOL . "The computer chose Rock.  You win!" . PHP_EOL;
	} elseif ($user_choice == 'P' && $computer_choice == 'paper') {
		echo PHP_EOL . "The computer chose Paper.  You tie." . PHP_EOL;
	} elseif ($user_choice == 'P' && $computer_choice == 'scissors') {
		echo PHP_EOL . "The computer chose Scissors.  You lose." . PHP_EOL;
	} elseif ($user_choice == 'S' && $computer_choice == 'rock') {
		echo PHP_EOL . "The computer chose Rock.  You lose." . PHP_EOL;
	} elseif ($user_choice == 'S' && $computer_choice == 'paper') {
		echo PHP_EOL . "The computer chose Paper.  You win!!" . PHP_EOL;
	} else {
		echo PHP_EOL . "The computer chose Scissors.  You tie." . PHP_EOL;
	}

echo PHP_EOL . "Do you want to play another? (Y/N): " . PHP_EOL;
$play_again = strtoupper(trim(fgets(STDIN)));
} while ($play_again !== 'N');

exit(0);

?>