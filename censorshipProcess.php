<!-- When accepting user inputs and posting to live environments, such as forums or comments boxes, we need to take into account any inappropriate words the user may use and we may wish to remove or
replace these.
This task has been designed to provide you with an opportunity to accept a user input and then filter this input and replace any inappropriate words.
Note that this is a basic introduction to the filtering process and much more comprehensive processes would need to be employed on a live environment.

Create a HTML form which allows the user to input a string of text. Send this text to a processing script that will search through the text and replace any inappropriate words
with ****
For example, the user may input:
I love this website but feel that the stupid badword1comments are detracting from the user
experience. The person who wrote this is a badword2.
where badword1 and badword2 would be something inappropriate. So as not to offend anyone we shall
just use badword1 and badword2.
The output from this sample would be:
I love this website but feel that the stupid ****comments are detracting from the user experience.
The person who wrote this is a ****. -->

<?php

$string = "I love this website but feel that the stupid badword1 comments are detracting from the user experience. The person who wrote this is a badword2.";

$badWords = array("badword1", "badword2");

foreach($badWords as $badWord){

$string = str_replace($badWord, "****", $string);

}

echo $string;