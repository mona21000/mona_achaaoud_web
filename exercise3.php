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
    echo"The color is red.<br>";
}
else {
    echo"The color is not red.<br>";
}

/*
3. Write a program to grade students based on their total score for a subject. The grading scheme is: Excellent : >80 ;Great >70 & less than 80;Good >60 & less than 70; Pass >50 & less than 60 & Fail <50
*/
$grade= 70;

switch ($grade) {
    case $grade>80;
    echo "Excellent";
    break;
    case $grade<=80 && $grade>70;
    echo "Great";
    break;
    case $grade<=70 && $grade>60; 
    echo "Good";
    break;
    case $grade<=60 && $grade>50;
    echo"Pass";
    break;
    case $grade<50;
    echo "Fail";
    break;
}
?>



<!-- 4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting.) -->



<!DOCTYPE HTML>
<html>  
<body>

<form action="exercice3.php" method="post">
Age: <input type="number" name="age"><br>
Name: <input type="text" name="name"><br>
<input type="submit">
</form>
<?php
if ( $_POST["age"] >=18) {
    echo"You are eligible for voting.";
}
else {
    echo"You are not eligible for voting.";
}
?>
</body>
</html>





