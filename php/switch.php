<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = date('N');

switch($day_of_week) {
    case 1:
        fwrite(STDOUT, 'Monday' . PHP_EOL);
        break;
    case 2: 
		fwrite(STDOUT, 'Tuesday' . PHP_EOL);
		break;
	case 3:
		fwrite(STDOUT, 'Wednesday' . PHP_EOL);
		break;
	case 4:
		fwrite(STDOUT, 'Thursday' . PHP_EOL);
		break;
	case 5:
		fwrite(STDOUT, 'Friday' . PHP_EOL);
		break;
	case 6:
		fwrite(STDOUT, 'Saturday' . PHP_EOL);
		break;
	case 7:
		fwrite(STDOUT, 'Sunday' . PHP_EOL);
		break;
	default:
		fwrite(STDOUT, 'Today is not a Real Day.  Whoah.' . PHP_EOL);
		break;
}

fwrite(STDOUT, 'Which day would you rather it be? (1-7): ');

$new_day = trim(fgets(STDIN));

switch(intval($new_day)) {
    case 1:
        fwrite(STDOUT, 'Monday' . PHP_EOL);
        break;
    case 2: 
		fwrite(STDOUT, 'Tuesday' . PHP_EOL);
		break;
	case 3:
		fwrite(STDOUT, 'Wednesday' . PHP_EOL);
		break;
	case 4:
		fwrite(STDOUT, 'Thursday' . PHP_EOL);
		break;
	case 5:
		fwrite(STDOUT, 'Friday' . PHP_EOL);
		break;
	case 6:
		fwrite(STDOUT, 'Saturday' . PHP_EOL);
		break;
	case 7:
		fwrite(STDOUT, 'Sunday' . PHP_EOL);
		break;
	default:
		fwrite(STDOUT, 'Today is not a Real Day.  Whoah.' . PHP_EOL);
		break;
}


exit(0);
?>