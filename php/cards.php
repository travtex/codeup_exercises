<?php

$suits = ["Spades", "Hearts", "Clubs", "Diamonds"];
$faces = ["Two", "Three", "Four", "Five", "Six",
		  "Seven", "Eight", "Nine", "Ten", "Jack",
		  "Queen", "King", "Ace"];

$deck = [];

foreach($suits as $suit) {
	foreach($faces as $face) {
		$deck[] = ["face" => $face, "suit" => $suit];
	}
}

shuffle($deck);

var_dump($deck);

?>