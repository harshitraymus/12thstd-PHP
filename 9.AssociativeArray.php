<?php
$marks = array("English" => 90, "Maths" => 95, "Science" => 80);
echo $marks["Maths"];
foreach($marks as $key=>$value){
    echo "<br>$key: $value";
}
?>