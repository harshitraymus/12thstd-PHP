<?php //Creating 2D array (Row x Column)
$x=array(
    array(1,"student1",35), //(roll no., name, marks)
    array(2,"student2",50), //Each individual array must be separated by , (not ;) as they are elements of main array.
    array(3,"student3",90),
);
//echo $x[0][0] (to print 1)
//echo $x[0][1] (to print 1student1)
//Printing in loop👇
for($row=0;$row<=2;$row++){
    for ($column = 0; $column <= 2; $column++) {
        echo $x  [$row]  [$column]   . "";
     }
    echo "<br>"; //to print each row in new line
}
?>