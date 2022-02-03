
<?php
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

# 4. Delete the dollar sign from the variable name. Run your code. What error did you get? Write the error message?
text1="I like";
text2="programming";
echo strlen ($text1 . " " . $text2);
echo "<br>";

?>