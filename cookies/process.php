<!-- This task is all about your ability to process input data and store it in cookies and retrieve the information.
You will create 3 separate files:
● form.php
● process.php
● retrieve.php
form.php
Your task is to create a simple input form for the user to enter the following information:
● Name
● Age
● Favourite colour
process.php
The data entered by the user will be stored in 3 separate cookies.
retrieve.php
This file will retrieve the data from the cookies and display the following:
Your name is (name).
Your age is (age).
Your favourite colour is (colour).
You will replace each of the terms in brackets with the values stored in the cookies -->

<?php 

if(isset($_POST["submit"])) {
  $name = $_POST["name"];
  $age = $_POST["age"];
  $colour = $_POST["colour"];

  setcookie('name', $name, time()+3600);
  setcookie('age', $age, time()+3600);
  setcookie('colour', $colour, time()+3600);
}