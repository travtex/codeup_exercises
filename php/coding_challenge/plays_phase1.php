<?php

function get_input($upper = FALSE) {
    $user_input = trim(fgets(STDIN));
    return $upper ? strtoupper($user_input) : $user_input;
}

function get_lines_earnest($character) {
	$lines = '';
	$my_lines = [];
	$filename = "../data/earnest.txt";
	$character = ucfirst(strtolower($character)) . '\. ';

	$lines = file_get_contents($filename);
	if(preg_match_all('~' . $character . '(.*?)' . "\n\n" . '~s', $lines, $my_lines)) {
		return $my_lines[0];
	}
	//return $my_lines;
}

function get_lines_nothing($character) {
	$lines = '';
	$my_lines = [];
	$filename = "../data/muchado.txt";
	$character = strtoupper($character) . '\.\\n';
	$lines = file_get_contents($filename);

	if(preg_match_all('~' . $character . '(.*?)' . "\n\n" . '~s', $lines, $my_lines)) {
		return $my_lines[0];
	}
}

// ask user for the character name
echo PHP_EOL . "Please select a play.\n\n(1)  The Importance of Being Earnest\n(2)  "
	. "Much Ado About Nothing\n(3)  Pygmalion" . PHP_EOL;

echo PHP_EOL . "Pick a play: ";

$my_play = get_input();

switch($my_play) {
	case '1':

		echo PHP_EOL . "Please enter the character's name: ";
		$my_role = get_input();
		$my_lines = get_lines_earnest($my_role);

		echo PHP_EOL . "Your character's lines are: " . PHP_EOL;

		foreach($my_lines as $line){
			echo $line . PHP_EOL;
		}
		break;
}

// var_dump($my_lines);

// return all play lines for that character
?>