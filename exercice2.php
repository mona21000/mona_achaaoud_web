
<?php
# SRINGS
# 1. Write PhP script with two string variables. Assign any text to these variables. Join them together. Print the length of the string.(Hint: string function) 

$text1="I like";
$text2="programming";
echo strlen ($text1 . " " . $text2);
echo "<br>";

# 2. In your above code, Change the double quotes to single quotes.Then run the script again. Did it have any effect?

$text1='I like';
$text2='programming';
echo strlen ($text1 . " " . $text2);
echo "<br>";
//Nothing changes, it remains the same.

/* 3. Put a single quote at the beginning of your text and double quote at the end. What happens now when you run your code?

$text1='I like";
$text2='programming";
echo strlen ($text1 . " " . $text2);
echo "<br>";

I get the following error message: Parse error: syntax error, unexpected identifier "programming" in /var/www/html/exs/mona_achaaoud_web/exercice2.php on line 21
*/

/* 4. Delete the dollar sign from the variable name. Run your code. What error did you get? Write the error message?
text1="I like";
text2="programming";
echo strlen ($text1 . " " . $text2);
echo "<br>";
I get the following error: Parse error: syntax error, unexpected token "=" in /var/www/html/exs/mona_achaaoud_web/exercice2.php on line 29
*/

/* 5. Put the dollar sign back and remove one of the semicolon from the code. Run your code again. What error did you get this time?
$text1="I like"
$text2="programming";
echo strlen ($text1 . " " . $text2);
echo "<br>";
I get the following error: Parse error: syntax error, unexpected variable "$text2" in /var/www/html/exs/mona_achaaoud_web/exercice2.php on line 38
*/

/* 6. Write a PHP script to get the following display 
 " It is Markku's car."
 Random characters: del c:\*.* " 
 */
echo "\"It is Markku's car.\"<br>" ;
echo "Random characters: del c: \\*.* \"<br>";

# OPERATORS

# 1. Write a script to add up the numbers: 298, 234, 46. Use echo statement to output your answer.
$num1=298;
$num2=234;
$num3=46;
echo" .($num1+$num2+$num3) . <br>";

# 2. Use variables to calculate the following : (87 + 44)+(200 * 15) / 10

$num4=87;
$num5=44;
$num6=200;
$num7=15;
$num8=10;

echo ($num4+$num5)+($num6*$num7)/$num8 ;

?>