<?php 
     function demo(){
        $a=10;
        echo "<h2>Local scope of local variable a = $a <br></h2>" ;
     } //local area of local host is between {}
     //We have defined the function
     demo(); //required to call the function also
     echo "<h2>Global scope of local variable a = $a <br> </h2>" ; //Error shown as a is local. So its value is undefines in Global scope.
     $b=20;
     echo "<h2>Global scope of global variable b = $b<br></h2>";
     echo "<h2>Local scope of global variable b = $b<br></h2>";
     global $b;
     echo "<h2>Local scope of global variable b with global keyword used = $b<br></h2>";
     echo "<h2>Local scope of global variable b=".$GLOBALS['b']." </h2>";

?>