<?php

// Create array to hold list of todo items
$items = array();

// List array items

function list_items($items)
{

    $list_view = "";

    foreach ($items as $key => $item) {
        $user_key = $key + 1;
        $list_view = $list_view . "[" . $user_key . "] {$item}" . PHP_EOL;
    }

    return $list_view;
}

// Get user input

function get_input()
{
    $user_input = trim(fgets(STDIN));

    if (ctype_lower($user_input))
    {
        return strtoupper($user_input);
    }
    else 
    {
        return $user_input;
    }
}

// The loop!
do {
    // Iterate through list items
    // foreach ($items as $key => $item) {
    //     // Display each item and a newline
    //     echo "[" . ($key + 1) . "] {$item}\n";
    // }

    echo PHP_EOL . list_items($items) . PHP_EOL;

    // Show the menu options
    echo '(N)ew item, (R)emove item, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input();

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = trim(fgets(STDIN));
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = trim(fgets(STDIN));
        // Remove from array
        unset($items[$key - 1]);
        $items = array_values($items);
    }
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);