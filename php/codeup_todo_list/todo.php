<?php

// Create array to hold list of todo items
$items = array();

// List array items

function list_items($items)
{

    $list_view = "";

    foreach ($items as $key => $item) 
    {
        $user_key = $key + 1;
        $list_view .= "[{$user_key}] {$item}" . PHP_EOL;
    }

    return $list_view;
}

// Get user input

function get_input($upper = FALSE)
{
    
    $user_input = trim(fgets(STDIN));
    return $upper ? strtoupper($user_input) : $user_input;

}

// Assign random todo list item.

function assign_todo($jobs) 
{
    
    $task = mt_rand(0, (count($jobs) - 1));
    return $task;

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
    $content_array = explode("\n", $contents);
    fclose($handle);
    return $content_array;
    }
}

$items = import_data("../data/todo_list.txt");
// The loop!
do 
{

    echo PHP_EOL . list_items($items) . PHP_EOL;

    // Show the menu options
    echo '(N)ew item, (R)emove item, (S)ort items, (A)ssign random item, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(TRUE);

    // Check for actionable input
    if ($input == 'N') 
    {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $user_item = get_input();

        echo 'Do you want to make this item the (F)irst or (L)ast on the list?: ';

        $first_last = get_input(TRUE);

        // Place item at beginning or end or $items array.
        
        if($first_last == 'F')
        {
            array_unshift($items, $user_item);
        }
        elseif($first_last == 'L')
        {
            $items[] = $user_item;
        }
    }
    elseif ($input == 'R') 
    {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input();
        // Remove from array
        unset($items[($key - 1)]);
        $items = array_values($items);
    }
    elseif ($input == 'A')
    {

        if (!empty($items)) 
        {
            while ($input != 'Y' || $input != 'N') 
            {
                // Select a random task and give option to remove it
                $input = '';
                $key = assign_todo($items);

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
    elseif ($input == 'S')
        {
            while ($input != 'A' || $input != 'Z') 
            {
                echo PHP_EOL . "How would you like to sort the list items?" . PHP_EOL
                 . "(A) to Z, or (Z) to A?: ";
                $input = get_input(TRUE);

                if ($input == 'A')
                {
                    sort($items);
                    break;
                }
                elseif ($input == 'Z') 
                {
                    rsort($items);
                    break;
                }
            }
        } 
}
while ($input != 'Q');

echo "Goodbye!\n";

exit(0);

?>