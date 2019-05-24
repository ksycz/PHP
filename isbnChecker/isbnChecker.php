<?php
// check if form was submitted

if(isset($_POST["submit"])) {

// assign post variables
$isbn = $_POST("isbn");

// total, incrementor
$total = 0;
$i = 1;

// split string into array
$isbnDigits = str_split($isbn);
// loop through array
foreach($isbnDigits as $isbnDigit) {
  // update total
  $total += $isbnDigit*$i;
  $i++;
}

// check if divisible by 11

if($total % 11 == 0)
  echo "This is valid ISBN";
} else {
  echo "This is not valid ISBN";
}