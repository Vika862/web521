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
//3
$students = [
    ['name' => 'Alice', 'age' => 21],
    ['name' => 'Bob', 'age' => 22], 
    ['name' => 'Jhon', 'age' => 20]
];
foreach($students as $nameStudents){
  echo $nameStudents['name'] . " " ;
};
//4

$numbers = [1,2,3,4,5,6,7,8,9];

$summ =array_reduce($numbers,
  function($acc, $curr){
  return $acc+$curr;}, 0);

  echo "</br>", $summ;
//5
$books = [
  ['title' => '1984', 'autor' => 'George Orwell'],
  ['title' => 'To Kill a Mockingbird', 'autor' => 'Harper Lee'],
  ['title' => 'Metro 2033', 'autor' => 'Dmitry Gluhovskiy']
];

$needBook = array_find($books, function($book){
  return $book['title'] === '1984';
});

echo implode($needBook);
// у меня почему то не выводится результат мнет говорит что версия пхп маленькаы
// а как обновить хз

