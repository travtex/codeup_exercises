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
    $handle = fopen($filename, "r");
    $contents = fread($handle, filesize($filename));
    fclose($handle);
    return $contents;
    }
}

fwrite(STDIN, PHP_EOL . "Which morse code file do you want to translate?: ");
$decode_this_file = import_data(get_input());

$decoded = '';

var_dump($decode_this_file);

?>