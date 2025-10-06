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

$needBook = array_find($books, function($book) {
  return $book['title'] === '1984';
});

echo "</br>", implode($needBook) ;
//6 и 7
// не нашла инфы про методы some  и every
// 8
$infoSale =[
  ['date' => '2025-10-1', 'item' => 'apple', 'amount' => 100 ],
  ['date' => '2025-10-2', 'item' => 'banana', 'amount' => 150],
  ['date' => '2025-10-3', 'item' => 'orange', 'amount' => 200],
  ['date' => '2025-10-4', 'item' => 'apple', 'amount' => 50],
  ['date' => '2025-10-5', 'item' => 'banana', 'amount' => 75],
  ['date' => '2025-10-6', 'item' => 'orange', 'amount' => 125]
];

$groupedByItem = array_reduce($infoSale, function($accum, $sale) {
    $accum[$sale['item']][] = $sale['amount'];
    return $accum;
}, []);

$result = array_map(function($amounts) {
    return array_sum($amounts);
}, $groupedByItem);

echo '</br>', implode(',', $result), '</br>' ;
//9
$users = [
  ['name' => 'Alice', 'age' => 28, 'isSubscribed' => 'true'],
    ['name' => 'Bob', 'age' => 29,  'isSubscribed' => 'false'], 
    ['name' => 'Jhon', 'age' => 30, 'isSubscribed' => 'true'],
    ['name' => 'Natali', 'age' => 32, 'isSubscribed' => 'true'],
    ['name' => 'Veronika', 'age' => 41,  'isSubscribed' => 'false'], 
    ['name' => 'Alex', 'age' => 19, 'isSubscribed' => 'true'],
    ['name' => 'Maxs', 'age' => 26, 'isSubscribed' => 'true'],
    ['name' => 'Oleg', 'age' => 44,  'isSubscribed' => 'false'], 
    ['name' => 'Maik', 'age' => 51, 'isSubscribed' => 'true']
];

$wantedUsers = array_filter($users, function($user){
  return $user['age']>= 30 || $user['isSubscribed']===true;
});

$userStrings = array_map(function($user) {
    return $user['name'] . ' (' . $user['age'] . ')';
}, $wantedUsers);
echo '</br>', implode(', ', $userStrings), '</br>';
//10
$taskForDay = [
  ['task' => 'Write report', 'status' => 'completed', 'priority' => 'low'],
  ['task' => 'Call to Jhaxon', 'status' => 'pending', 'priority' => 'high'],
  ['task' => 'Check mail', 'status' => 'completed', 'priority' => 'low'],
  ['task' => 'Walk with dog', 'status' => 'completed', 'priority' => 'high'],
  ['task' => 'Go to library', 'status' => 'pending', 'priority' => 'low'],
  ['task' => 'Play in CS', 'status' => 'pending', 'priority' => 'high']
];

foreach($taskForDay as $task) {
  if($task['status'] === 'pending' || $task['priority'] === 'high') {
    echo $task['task'] . " - Status: " . $task['status'] . ", Priority: " . $task['priority'] . "</br>";
  }
}