<?php
$course = array("PHP", "JavaScript", "Databases");
// accessing the value of an array
echo "Courses this period are: " . $course[0] . ", " . $course[1] . " and " . $course[2];


echo "<h2> Looping through an indexed Array </h2>";
$city = array('Kajaani', 'Oulu', 'Helsinki', 'Kemi', 'Tornio', 'Tampere');
$num = count($city);
for ($i=0; $i < $num; $i++) {
    echo "$i) $city[$i] <br>";
}
?>