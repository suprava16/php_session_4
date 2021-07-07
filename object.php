<?php

class calculation{
  public $a,$b,$c;
  function sum(){
    $this->c=$this->a + $this->b;
    return $this->c;
  }
  function sub(){
    $this->c=$this->a - $this->b;
    return $this->c;
  }

}
$obj1=new calculation();
$obj1->a=50;
$obj1->b=20;
echo "sum=",$obj1->sum()."<br>";

$obj2=new calculation();
$obj2->a=20;
$obj2->b=20;
echo "sum=",$obj2->sum();

$obj3=new calculation();
$obj3->a=70;
$obj3->b=20;
echo "sub=",$obj3->sub();

?>