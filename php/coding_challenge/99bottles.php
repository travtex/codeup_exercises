<?php

$lyric_1 = " bottles of beer on the wall, ";
$lyric_2 = " bottles of beer.  Take one down and pass it around, ";
$lyric_3 = " bottles of beer on the wall." . PHP_EOL;

for($i=99; $i>=0; $i--)
{
	if($i > 2)
	{
		echo $i . $lyric_1 . $i . $lyric_2 . ($i -1) . $lyric_3;
	}
	elseif($i == 2)
	{
		echo $i . $lyric_1 . $i . $lyric_2 . "one more bottle of beer on the wall." . PHP_EOL;
	}
	elseif($i == 1)
	{
		echo "One more bottle of beer on the wall, one more bottle of beer.  Take one down and pass it around, no more bottles of beer on the wall." . PHP_EOL;
	}
	else
	{
		$gone = "NO more";
		echo $gone . $lyric_1 . $gone . $lyric_2 . $gone . $lyric_3;
		echo "BURP." . PHP_EOL;
	}
}

?>