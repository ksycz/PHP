<?php

// Each book published is given a unique identifier called an International Standard Book Number or ISBN for short.
// The ISBN is 13 characters long if assigned from 1 January 2007 and 10 characters long if assigned before that date.
// This task has been designed to test your ability to create a form and process the user input.

// Design a HTML form to allow a user to input a 10 digit ISBN. Send this data to a processing script and then check if it is a valid ISBN number.
// Output a valid or invalid message to the user. Sample valid ISBN: 1573980137


// check if form was submitted

if(isset($_POST["submit"])) {

// assign post variables
$isbn = $_POST["isbn"];

// total, incrementor
$total = 0;
$i = 1;

// split string into array
$isbnDigits = str_split($isbn);
// loop through array
foreach($isbnDigits as $isbnDigit) {
  // update total
  $total += $isbnDigit * $i;
  $i++;
}

// check if divisible by 11

if($total % 11 == 0)
  echo "This is valid ISBN";
} else {
  echo "This is not valid ISBN";
}