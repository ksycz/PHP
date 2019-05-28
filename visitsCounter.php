<?php

// In this task you will use your understanding of sessions and conditional statements.
// You will create a session to track the number of times a user visits a page during a browsing session.
// You will need to print out a message such as:
// “You have visited this page 6times.”
// The number 6 would be retrieved from session data.
// You will need to increment the page hit by one each time the page is visited.
// Things to consider:
// ● what will you do on the first page visit?
// ● what message should be displayed on the first page visit?
// ● how will you store the hit counter in a session?
// ● how will you increment the hit counter?
// ● what error checking will you perform?

session_start();

if(isset($_SESSION['hits'])){

$_SESSION['hits']++;

echo "You have visited this page " . $_SESSION['hits'] . " times so far.";

} else {

$_SESSION['hits'] = 1;

echo "This is the first time you have visited this page.";

}