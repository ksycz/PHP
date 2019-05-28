<!-- Your task is to create two arrays, one for the suits and one for the values.
You then need to select a random element from each array which will then represent a playing card.
For example, if a spadewas randomly selected from the suits array and a 5from the values array then
the playing card would be the 5 of Spades.
You simply need to output the playing card to the user.
E.g. The randomly selected card is the 5 of spades. -->

<?php

$suit = ['hearts', 'clubs', 'diamonds', 'spades'];

$suit = $suit[array_rand($suit)];

$value = array('Ace', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'Jack', 'Queen', 'King');

$value = $value[array_rand($value)];

$card = $value . ' of ' . $suit;

echo $card;