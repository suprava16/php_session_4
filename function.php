<?php

//regular function
// function myFun(){
//   echo "hello from myFun function";
// }
// myFun();
// myFun();
// myFun();

//function with parameters
// function myFun2($a,$b){
//  echo "value of a=$a and b=$b";
// }
// myFun2(20,40);

//function with return value
function myFun2($a,$b){
 $sum=$a+$b;
 return $sum;
 }
 $total=myFun2(20,40);
 echo $total;

?>