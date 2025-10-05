  <?php
  //task1
  $arrayOne = [1,2,3,4];
  $doubleArray = array_map(function($number){
    return $arrayOne*2;
  },$arrayOne);