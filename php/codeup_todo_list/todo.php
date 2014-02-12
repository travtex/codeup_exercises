<?php

// Create array to hold list of todo items
$items = array();

// List array items

function list_items($items)
{

    $list_view = "";

    foreach ($items as $key => $item) 
    {
        $user_key = ++$key;
        $list_view = $list_view . "[" . $user_key . "] {$item}" . PHP_EOL;
    }

    return $list_view;
}

// Get user input

function get_input($upper = FALSE)
{
    
    $user_input = trim(fgets(STDIN));

    return ($upper) ? strtoupper($user_input) : $user_input;
    
}

// Assign random todo list item.

function assign_todo() 
{
    $items = func_get_args();
    $task = mt_rand(0, (count($items) - 1));
    return $task;

}

// The loop!
do 
{
    // Iterate through list items
    // foreach ($items as $key => $item) {
    //     // Display each item and a newline
    //     echo "[" . ($key + 1) . "] {$item}\n";
    // }

    echo PHP_EOL . list_items($items) . PHP_EOL;

    // Show the menu options
    echo '(N)ew item, (R)emove item, (A)ssign random item, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(TRUE);

    // Check for actionable input
    if ($input == 'N') 
    {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = get_input();
    } 
    
    elseif ($input == 'R') 
    {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input();
        // Remove from array
        unset($items[--$key]);
        $items = array_values($items);
    }
    elseif ($input == 'A')
    {

        if ($items) 
        {
            while ($input != 'Y' || $input != 'N') 
            {
                // Select a random task and give option to remove it
                $input = '';
                $key = call_user_func_array('assign_todo', $items);

                echo PHP_EOL . 'Your assigned task is: ' . $items[$key]
                . '.' . PHP_EOL;

                echo 'Have you finished this todo item? (Y/N): ';

                $input = get_input(TRUE);
         

                if ($input == 'Y') 
                {
                    echo PHP_EOL . "Great!  Let's check that one off the list." . PHP_EOL;
                    unset($items[$key]);
                    $items = array_values($items);
                    break;

                }
                elseif ($input == 'N') 
                {
                    echo PHP_EOL . "Why not?  Quit being a slacker." . PHP_EOL;
                    break;
                }

            }
        } 
        else 
        {
            echo PHP_EOL . "There are no list items to assign." . PHP_EOL;
    }
    

// Exit when input is (Q)uit

    } 
}
    while ($input != 'Q');

echo "Goodbye!\n";

exit(0);

?>