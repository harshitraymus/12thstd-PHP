<?php 
$height = $_GET["height"];
$weight = $_GET["weight"]; 
$heightInMs = $height/100;
$bmi = $weight/($heightInMs*$heightInMs); //BMI=wt/(ht^2 (in metres))
if($bmi < 18.5) {
$message = "You are underweight."; }
else if($bmi >=18.5 && $bmi <= 24.9) {
$message = "You have normal weight."; }
else if($bmi >24.9 && $bmi <=29.9) {
$message = "You are overweight."; }
else {
$message = "You are obese."; }
echo $message; 
echo "</br> BMI :".$bmi;
?>