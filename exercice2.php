
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
?>