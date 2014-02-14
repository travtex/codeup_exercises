<?php

$lyric_1 = " bottles of beer on the wall, ";
$lyric_2 = " bottles of beer.  Take one down and pass it around, ";
$lyric_3 = " bottles of beer on the wall." . PHP_EOL;

for($i=99; $i>=2; $i--)
{
	echo $i . $lyric_1 . $i . $lyric_2 . ($i-1) . $lyric_3;
}
	echo "1 bottle of beer on the wall, " . "1" .
 		" bottle of beer.  Take one down and pass it around, "
	 		. "no more bottles of beer on the wall." . PHP_EOL;

	echo "No more" . $lyric_1 . "no more" . $lyric_2 . "no more"
	 		. $lyric_3;
	 


?>