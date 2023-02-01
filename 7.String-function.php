<?php
$str = "Harshit Raymus  !";
$length = strlen($str);
echo "Length of String is: $length <br>";

$word_count = str_word_count($str);   
echo "No. of words is: $word_count <br>"; 

$reverse = strrev($str);
echo "Reverse String is: $reverse <br>";

$position = strpos($str,'!');
echo "Position of ! is: $position <br>"; //starts counting from zero

$replace = str_replace('!', '##', $str);
echo "The string after replacing ! with ## is: $replace <br>";

$partofstring = $substr($str,4,10);
echo "Part of string is: $partofstring <br>";

/*more functions
strtolower($str)
substr_count($str,'Harshit') (No. of times given substr occurs)
ucwords($str)  (Each letter of first word bcoms upper case)
trim($str,charlist) (removes spaces from $str. Removes given substr in charlist)




?>