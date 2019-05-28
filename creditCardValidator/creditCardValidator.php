<!-- In this task you need to take a user’s credit card input and test if it is a valid credit card number.
Design a simple form to allow the user to input a credit card number (some test numbers are provided
below).
Test if the credit card number is valid.
Output an appropriate message, just showing the last 4 digits.
e.g.
Your credit card number ending in 1234 is valid
Your credit card number ending in 1234 is invalid
Replace 1234 with the last 4 digits of their input.

Step 1: Take the credit card number from the user input
4417123456789113
Step 2: Reverse the credit card number
3119876543217144
Step 3: Take each of the odd position digits and add them
3119876543217144
3 + 1 + 8 + 6 + 4 + 2 + 7 + 4 = 35
Step 4: Take each of the even digits and multiply by 2
3119876543217144
1*2=2 9*2=18 7*2=14 5*2=10 3*2=6 1*2 1*2 4*2
If the resulting answer for each digit is greater than 9 then subtract 9 from the answer and
then add the numbers together
2 + 9 + 5 + 1 + 6 + 2 + 2 + 8 = 35
Step 5: Add the totals from Step 3 and Step 4
35 + 35 = 70
Step 6: Take the total from Step 5 and check if it divisible by 10 (with no remainder). If it is then the
card number is valid.
SAMPLE CREDIT CARD NUMBERS
4417123456789113 valid
30569309025904 valid
5019817010103742 invalid
412345672124357 invalid -->


<?php

//check if form submitted
if(isset($_POST['submit'])){

    //assign variables (total and incrementor)
    $number = $_POST['card'];
    $total = 0;
    $i = 1;

    //get last 4 digits
    $last4 = substr($number, -4, 4);

    //split string into array
    $number = str_split($number);

    //reverse array
    $number = array_reverse($number);

    //loop through array and calculate
    foreach($number as $digit){
        //if even number
        if($i % 2 == 0){
            //multiply digit by 2
            $digit *= 2;
            //if > 9
            if($digit > 9){
                //subtract 9
                $digit -= 9;
            }

        }

        // total = total + digit
        $total += $digit;
        $i++;

    }


    //check if divisible by 10
    if($total % 10 == 0){
        echo "Your credit card number ending in " . $last4 . " is valid";
    } else {
        echo "Your credit card number ending in " . $last4 . " is invalid";
    }

}
