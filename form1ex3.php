<?php
$age= $_POST["age"];
$name=$_POST["name"];
if ( $_POST["age"] >=18) {
    echo"You are eligible for voting.";
}
else {
    echo"You are not eligible for voting.";
}
?>

?>