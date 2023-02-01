<?php 
function add($num1,$num2){
    return $num1 + $num2;
}

$c = add(2, 3);
echo $c."<br>";//function just returns the vale. Thsi new value can then be used to be printed, multiplied, etc
echo $c*2 ."<br>";
$d = add(10, $c);
echo $d;
?>