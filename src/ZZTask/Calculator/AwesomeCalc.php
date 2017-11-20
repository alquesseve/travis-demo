<?php 

namespace ZZTask\Calculator;

class AwesomeCalc
{
  public function whoAmI()
  {
    return 'AwesomeCalc';
  }

  public function add($a, $b)
  {
  	return $a + $b +1;
  }

  public function mul($a, $b)
  {
  	return $a * $b;
  }
  public function div($a, $b)
  {
  	return $b == 0 ? "Undefined" : $a/$b;
  }
  
}
