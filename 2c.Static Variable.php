<?php 
   function counter(){
      static $a=0; //without static, whenever counter fn is called, it only gives 0 and initial a=0. Using staticm it used a=++
      echo "$a<br>";
      $a++;
   }
    counter();//first call of function must print 0
    counter();//2nd call of fn must print1 and so on by increment of 1
    counter();
    counter();
    counter();
?>