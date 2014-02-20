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

function get_lines_pygmalion($character) {
	$lines = '';
	$my_lines = [];
	$filename = "../data/pygmalion.txt";
	$character1 = strtoupper($character) . '\. ';
	$character2 = strtoupper($character) . ' \[';

	$lines = file_get_contents($filename);

	if(preg_match_all('~' . $character1 . "(.*?)\n\n|" . $character2 . "(.*?)\n\n~s" , $lines, $my_lines)) {
		return $my_lines[0];
	}
}

// ask user for the character name
echo PHP_EOL . "Please select a play.\n\n(1)  The Importance of Being Earnest\n(2)  "
	. "Much Ado About Nothing\n(3)  Pygmalion" . PHP_EOL;

echo PHP_EOL . "Pick a play: ";

$my_play = get_input();
echo PHP_EOL . "Please enter the character's name: ";
$my_role = get_input();

switch($my_play) {
	case '1':

		$my_lines = get_lines_earnest($my_role);
		break;

	case '2':

		$my_lines = get_lines_nothing($my_role);
		break;

	case '3':
		$my_lines = get_lines_pygmalion($my_role);
		break;
}

echo PHP_EOL . "Your character's lines are: \n" . PHP_EOL;

foreach($my_lines as $line) {
	echo $line . PHP_EOL;
}

exit(0);

// var_dump($my_lines);
// return all play lines for that character
?>