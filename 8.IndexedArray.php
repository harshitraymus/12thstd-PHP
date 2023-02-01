<?php
$a = array("Mon", "Tue", "Wed", "Thurs"); //multiple values in single variable stored using array 
//index no  0       1      2       3
$b = "Mon";
$a[4] = "Fri";//We can add elements in array using index no.
echo "$b <br>";//(printing a normal variable)
//to access value from array, use index no of that value
echo "$a[1] <br>";
echo "$a[0]<br>";
$count=count($a);
echo "No. of elements in array is: $count <br>";
?>