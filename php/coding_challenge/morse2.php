<?php

/* For this coding challenge, we're not allowed to use lookup arrays.
   As a fan of lookup arrays, this makes me have sads. */

function get_input($upper = FALSE)
{
    
    $user_input = trim(fgets(STDIN));
    return $upper ? strtoupper($user_input) : $user_input;

}

function import_data($filename)
{
    if (filesize($filename) == 0)
    {
        return FALSE;
    }
    else
    {
    	$contents = file_get_contents($filename);
    	return $contents;
    }
}

fwrite(STDIN, PHP_EOL . "Which morse code file do you want to translate?: ");
$decode_this_file = import_data(get_input());

$decode_this_file .= ' ';

// var_dump($decode_this_file);

$decoded = '';
$strlen = strlen($decode_this_file);
$working_string = '';

for($i = 0; $i < $strlen; $i++)
{
	// if ($decode_this_file{$i} == "\n")
	// {
	// 	$working_string .= "\n";
	// 	$working_string = '';

	// }
	if($decode_this_file{$i} == ' ' || $decode_this_file{$i} == "\n")
	{

		switch ($working_string)
		{
			case '-':
				$decoded .= 'T';
				break;
			case '--':
				$decoded .= 'M';
				break;
			case '---':
				$decoded .= 'O';
				break;
			case '--.':
				$decoded .= 'G';
				break;
			case '--.-':
				$decoded .= 'Q';
				break;
			case '--..': 
				$decoded .= 'Z';
				break;
			case '-.':
				$decoded .= 'N';
				break;
			case '-.-':
				$decoded .= 'K';
				break;
			case '-.--':
				$decoded .= 'Y';
				break;
			case '-.-.':
				$decoded .= 'C';
				break;
			case '-..':
				$decoded .= 'D';
				break;
			case '-..-':
				$decoded .= 'X';
				break;
			case '-...':
				$decoded .= 'B';
				break;
			case '.':
				$decoded .= 'E';
				break;
			case '.-':
				$decoded .= 'A';
				break;
			case '.--':
				$decoded .= 'W';
				break;
			case '.---':
				$decoded .= 'J';
				break;
			case '.--.':
				$decoded .= 'P';
				break;
			case '.-.':
				$decoded .= 'R';
				break;
			case '.-..':
				$decoded .= 'L';
				break;
			case '..':
				$decoded .= 'I';
				break;
			case '..-':
				$decoded .= 'U';
				break;
			case '..-.':
				$decoded .= 'F';
				break;
			case '...':
				$decoded .= 'S';
				break;
			case '...-':
				$decoded .= 'V';
				break;
			case '....':
				$decoded .= 'H';
				break;

			// Numbers

			case '-----':
				$decoded .= '0';
				break;
			case '----.':
				$decoded .= '9';
				break;
			case '---..':
				$decoded .= '8';
				break;
			case '--...':
				$decoded .= '7';
				break;
			case '-....':
				$decoded .= '6';
				break;
			case '.----':
				$decoded .= '1';
				break;
			case '..---':
				$decoded .= '2';
				break;
			case '...--':
				$decoded .= '3';
				break;
			case '....-':
				$decoded .= '4';
				break;
			case '.....':
				$decoded .= '5';
				break;

			// Other characters

			case '---...':
				$decoded .= ':';
				break;
			case '--..--':
				$decoded .= ',';
				break;
			case '-.--.-':
				$decoded .= '\)';
				break;
			case '-.-.--':
				$decoded .= '!';
				break;
			case '-.-.-.':
				$decoded .= ';';
				break;
			case '-..-.':
				$decoded .= '/';
				break;
			case '-...-':
				$decoded .= '=';
				break;
			case '-....-':
				$decoded .= '+';
				break;
			case '.-.-.-':
				$decoded .= '.';
				break;
			case '.-..-.':
				$decoded .= '"';
				break;
			case '.-...':
				$decoded .= '&';
				break;
			case '..--.-':
				$decoded .= '_';
				break;
			case '..--..':
				$decoded .= '?';
				break;
			case '...-..-':
				$decoded .= '$';
				break;

			// Space character

			case '/':
				$decoded .= ' ';
				break;

			// Newline character (NOT WORKING?!)	
			// case "\n":
			// 	$decoded .= "\n";
			// 	break;

				
		}
		$working_string = '';
			if ($decode_this_file{$i} == "\n")
			{
				$decoded .= "\n";	
			}

	}
	else
	{
	$working_string .= $decode_this_file{$i};
	}
}

fwrite(STDOUT, PHP_EOL . "Your translated morse file reads: " . PHP_EOL . $decoded . PHP_EOL);
exit(0);

//var_dump($decoded);
// var_dump($string_place);
//var_dump($decode_this_file{1});

?>