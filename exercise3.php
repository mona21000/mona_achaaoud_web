<?php
echo"<h1>Exercice 3 - Mona Achaaoud</h1>";

/*
1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:

It's August, so it's still holiday.
Not August, This is Month-name so i don't have any holidays

You can use date(F) function to get the current month name
*/
$f= date("F");
if ($f == "August") {
    echo"It's August, so it's still holiday.<br>";
    }
else {
    echo"Not August, This is $f so i don't have any holidays.<br>";
}

/*
2. Assign color red to a variable name $color and check to print one the following responses using if else statement 

The color is red. 

The color is not red. 
*/
$color="red";
if ($color=="red") {
    echo"The color is red.";
}
else {
    echo"The color is not red.";
}

/*
3. Write a program to grade students based on their total score for a subject. The grading scheme is: Excellent : >80 ;Great >70 & less than 80;Good >60 & less than 70; Pass >50 & less than 60 & Fail <50
*/
switch ($grade) {
    case $grade>80;
    echo "Excellent";
    break;
    case $grade<80 && $grade>70;
    echo "Great";
    break;
    case $grade<70 && $grade>60; 
    echo "Good";
    break;
    case $grade<60 && $grade>50;
    echo"Pass";
    break;
    case $grade<50;
    echo "Fail";
    break;
}

?>