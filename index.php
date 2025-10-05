  <?php
  //task1
  $arrayOne = [1,2,3,4];

  $doubleArray = array_map(function($number){
    return $number*2;
  },$arrayOne);

 echo implode(",", $doubleArray),"</br>";

 //2
$fruits = ['apple','banana', 'kiwi', 'strawberry','watermelow','orange'];

$fruitsB = array_filter($fruits, function($fruit){
  return strlen($fruit)>5;
});

echo implode(",", $fruitsB), "</br>";