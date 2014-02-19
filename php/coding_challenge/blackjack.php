<?php

// complete all "todo"s to build a blackjack game

// create an array for suits
$suits = ['C', 'H', 'S', 'D'];
// create an array for cards
$cards = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];
$deck = [];
// build a deck (array) of cards
// card values should be "VALUE SUIT". ex: "7 H"
// make sure to shuffle the deck before returning it
function buildDeck($suits, $cards) 
{
  // todo
	$deck = [];
	foreach($cards as $card)
	{
		foreach($suits as $suit)
		{
			$deck[] = $card . ' ' . $suit;
		}
	}
	return $deck;
}

function get_input($upper = FALSE)
{
    
    $user_input = trim(fgets(STDIN));
    return $upper ? strtoupper($user_input) : $user_input;

}


// determine if a card is an ace
// return true for ace, false for anything else
function cardIsAce($card) 
{
  // todo
	return $card[0] == 'A' ? TRUE : FALSE;

}

// determine the value of an individual card (string)
// aces are worth 11
// face cards are worth 10
// numeric cards are worth their value
function getCardValue($card) 
{
  // todo
	if(is_numeric($card[0]))
	{
		return intval($card[0]);
	}
	elseif($card[0] == 'A')
	{
		return 11;
	}
	else
	{
		return 10;
	}
}

function aceInHand($hand)
{
	foreach($hand as $card)
	{
		if ($card[0] == 'A')
		{
			return TRUE;
			break;
		}
		else
		{
			return FALSE;
		}
	}
}

// get total value for a hand of cards
// don't forget to factor in aces
// aces can be 1 or 11 (make them 1 if total value is over 21)
function getHandTotal($hand, $total = 0) 
{
  // todo
	foreach($hand as $card)
	{
		$total += getCardValue($card);
		if($total > 21 && aceInHand($hand))
		{
			$total -= 10;
		}
	}
	return $total;
}

// draw a card from the deck into a hand
// pass by reference (both hand and deck passed in are modified)
function drawCard(&$hand, &$deck) 
{
  // todo
	$hand[] = array_pop($deck);

}

// print out a hand of cards
// name is the name of the player
// hidden is to initially show only first card of hand (for dealer)
// output should look like this:
// Dealer: [4 C] [???] Total: ???
// or:
// Player: [J D] [2 D] Total: 12
function echoHand($hand, $name, $hidden = false) 
{
  // todo
	fwrite(STDIN, PHP_EOL . "Hand for {$name}: ");
	
	if($hidden == FALSE)
	{
		foreach($hand as $card)
		{
			fwrite(STDIN, '[' . $card[0] . ' ' . $card[1] . '] ');
		}
		fwrite(STDIN, 'Total: ' . getHandTotal($hand));
	}
	else
	{
		fwrite(STDIN, '[' . $hand[0][0] . ' ' . $hand[0][1] . '] [???] Total: ???');
	}
}

// build the deck of cards
// $deck = buildDeck($suits, $cards);

$deck = buildDeck($suits, $cards);
$real_deck = [];

foreach($deck as $card)
{
	$real_deck[] = explode(' ', $card);
}

shuffle($real_deck);

// var_dump($real_deck);
// var_dump(cardIsAce($real_deck[12]));
// var_dump(cardIsAce($real_deck[0]));

// var_dump(getCardValue($real_deck[10]));

fwrite(STDIN, PHP_EOL . "What is your name?: ");
$player_name = get_input();
$dealer_name = "Dealer";
// initialize a dealer and player hand
$dealer = [];
$player = [];
$player_total = 0;
$dealer_total = 0;


// Testing Ace bug
// $player[] = ['A','C'];
// $player[] = ['8','C'];
// $player[] = ['10','C'];

fwrite(STDIN, PHP_EOL . 'Dealing...' . PHP_EOL . '...' . PHP_EOL);

drawCard($player, $real_deck);
drawCard($player, $real_deck);

// var_dump($player);

// echoHand($player, $player_name);

// dealer and player each draw two cards
// todo
drawCard($dealer, $real_deck);
drawCard($dealer, $real_deck);
// echo the dealer hand, only showing the first card
// todo
fwrite(STDIN, PHP_EOL . echoHand($dealer, $dealer_name, $hidden = TRUE));
fwrite(STDIN, echoHand($player, $player_name) . PHP_EOL);
// echo the player hand
// todo
$player_total = getHandTotal($player);
// allow player to "(H)it or (S)tay?" till they bust (exceed 21) or stay
while ($player_total <= 21) {
  
	fwrite(STDIN, PHP_EOL . "Do you want to (H)it or (S)tay?: ");
	$hit_or_stay = get_input(TRUE);

	if($hit_or_stay == 'H')
	{
		drawCard($player, $real_deck);
		fwrite(STDIN, echoHand($player, $player_name) . PHP_EOL);
		$player_total = getHandTotal($player);
			if($player_total > 21)
			{
				fwrite(STDIN, "You busted!" . PHP_EOL);
				exit(0);
			}
	}
	elseif($hit_or_stay == 'S')
	{
		fwrite(STDIN, PHP_EOL . "You stayed at {$player_total}." . PHP_EOL);
		break;
	}
	else
	{
		fwrite(STDIN, PHP_EOL . "Invalid Option." . PHP_EOL);
		continue;
	}

}

// show the dealer's hand (all cards)
// todo
fwrite(STDIN, PHP_EOL . echoHand($dealer, $dealer_name));
// todo (all comments below)

// at this point, if the player has more than 21, tell them they busted
// otherwise, if they have 21, tell them they won (regardless of dealer hand)

// if neither of the above are true, then the dealer needs to draw more cards
// dealer draws until their hand has a value of at least 17
// show the dealer hand each time they draw a card
$dealer_total = getHandTotal($dealer);
while($dealer_total < 17)
{
	drawCard($dealer, $real_deck);
	fwrite(STDIN, PHP_EOL . "Dealer hits ..." . PHP_EOL);
	fwrite(STDIN, echoHand($dealer, $dealer_name) . PHP_EOL);
	$dealer_total = getHandTotal($dealer);

		if($dealer_total > 21)
		{
			fwrite(STDIN, PHP_EOL . "Dealer busts!  You win!" . PHP_EOL);
			exit(0);
		}
		else
		{
			continue;
		}

}

if($dealer_total > $player_total)
{
	fwrite(STDIN, PHP_EOL . "Dealer wins!" . PHP_EOL);
	exit(0);
}
elseif($dealer_total == $player_total)
{
	fwrite(STDIN, PHP_EOL . "It's a tie.  You push." . PHP_EOL);
	exit(0);
}
else
{
	fwrite(STDIN, PHP_EOL . "You win!" . PHP_EOL);
}


?>