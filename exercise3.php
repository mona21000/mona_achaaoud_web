<?php
echo"<h1>Exercice 3 - Mona Achaaoud</h1>";

/*
1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:

It's August, so it's still holiday.
Not August, This is Month-name so i don't have any holidays

You can use date(F) function to get the current month name
*/
$m= date("M");
if ($m == "August") {
    echo"It's August, so it's still holiday.";
else {
    echo"Not August, This is $m so i don't have any holidays.";
}


?>