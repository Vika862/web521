<?php
// task1
$staff = [
    [
        'name' => 'Maik',
        'company' => 'Microsoft',
        'position' => 'dropper'
    ],
    [
        'name' => 'Anna',
        'company' => 'Ambrella',
        'position' => 'Chief'
    ],
    [
        'name' => 'Gregory',
        'company' => 'Ambrella',
        'position' => 'Cashier'
    ],
    [
        'name' => 'Andrey',
        'company' => 'Ambrella',
        'position' => 'driver'
    ],
    [
        'name' => 'Vanessa',
        'company' => 'Samsung',
        'position' => 'Accountant'
    ],
    [
        'name' => 'Jhon',
        'company' => 'Microsoft',
        'position' => 'Technical specialist'
    ],
    [
        'name' => 'Mina',
        'company' => 'Microsoft',
        'position' => 'data analyst'
    ],
    [
        'name' => 'Clause',
        'company' => 'Samsung',
        'position' => 'development'
    ],
    [
        'name' => 'Innnessa',
        'company' => 'Apple',
        'position' => 'Project manager'
    ],
    [
        'name' => 'Alex',
        'company' => 'Apple',
        'position' => 'Product Owner'
    ]
];

foreach($staff as $employee){
    echo "<p>" . $employee['name'] . " is working in " . " " . $employee['company'] . " as " . $employee['position'] . "</p> <br>";
};
echo "<hr>";
//task2
$isCompany =[];
foreach($staff as $employee){
    $company = $employee['company'];
    if(!isset($isCompany[$company])){
        $isCompany[$company]=[];
    }
    $isCompany[$company][]=$employee;
}


foreach($isCompany as $inCompany => $employee){
    echo "<h3> $inCompany </h3>"; 

    echo "<ul>";
    foreach($employee as $employe){
        echo "<li>" . $employe['name'] . "</li>";
    }
    echo "</ul>";
}

echo "<hr>";
//task3
$numbers= [1];
$lastNumber = $numbers[array_key_last($numbers)];

for($i = 1; $i < 10; $i++){
    if ($lastNumber >= 100) {
        break;
    }
    
    $randomNum = rand(1, 100);
    
    if ($randomNum > $lastNumber){
        array_push($numbers, $randomNum);
        $lastNumber = $randomNum;
    }
    else {
        $i--;
        continue;
    }
};

echo implode(',', $numbers);
echo "<hr>";
//task 4

function generateArrayFloatNumber($count){
    $array = [];

    for($i=0; $i<$count; $i++){
        $array[] = [  
            rand(10,1000)/100,
            rand(1,6)
        ];
    }
    return $array;
}

$floatNumber = generateArrayFloatNumber(10);
$result =[];

foreach($floatNumber as $numb){
    [$x, $y]=$numb;
    $result[] = pow($x,$y);
}
echo "</br>";
echo "</br>";
echo implode("</br></br>", $result);
echo "</br>";
echo "<hr>";
//task5

$arrayFive = [];

for($a=0;$a<5;$a++){
    $arrayminifive=[];
    for($b=0;$b<5;$b++){
        $arrayminifive[]=rand(10,100);
    }
    $arrayFive[]=$arrayminifive;
}
    echo "</br>";

foreach($arrayFive as $innerArray){
    $minValue = min($innerArray); 
    echo "</br>";
    
    foreach($innerArray as $value){ 
        if($value == $minValue) {  // ⬅️ ДОБАВЬ ЭТУ СТРОКУ
            echo "<span style='color:red'>$value</span>";
        } else {
            echo $value;
        }
        echo ",";
    }
    echo "</br>";
}
echo "</br>";

$sumMinValue = array_sum($innerArray);
$countValue = count($innerArray);
$average = $sumMinValue/$countValue;

echo "Сумма минимальных значений: $sumMinValue";
echo "</br>";
echo "Среднее знчение массива:$average";