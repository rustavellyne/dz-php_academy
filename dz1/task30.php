<?php
// task 30
$s = 120;
$t = 2;

$speed_km_hour = $s / $t;
$speed_m_sec = $speed_km_hour / 3.6;

echo "speed in Km per hour = {$speed_km_hour} and speed in meter per second = {$speed_m_sec} \n";

//task 31
$foo = 'bar';
$bar = 10;

echo $$foo;

// task 32
$a = 4;
$b = 3;
$operator = '%';

if ($operator === '+')
{
    echo "\n result {$a} {$operator} {$b} = ", $a + $b;
};

if ($operator === '-')
{
    echo "\n result  {$a} {$operator} {$b} = ", $a - $b;
};

if ($operator === '*')
{
    echo "\n result  {$a} {$operator} {$b} = ", $a * $b;
};

if ($operator === '/' && $b == 0)
{
    echo "\n division by zero";
} elseif ($operator === '/' && $b !== 0)
{
    echo "\n result  {$a} {$operator} {$b} = ", $a / $b;
};

if ($operator === '%' && $b == 0)
{
    echo "\n division by zero";
} elseif ($operator === '%' && $b !== 0)
{
    echo "\n result  {$a} {$operator} {$b} = ", $a % $b;
}

//task33
$a = 4;
$b = 2;
$max = max($a, $b);
echo "\n max of {$a} and {$b} is {$max} \n";

//task34
$a = '78';
$b = 78;

if( $a == $b)
{
    echo "equals \n";
} else 
{
    echo "not equals \n";
}

// task35
$a = '78';
$b = 78;
if( $a === $b)
{
    echo "equals \n";
} else 
{
    echo "not equals \n";
}

//task36
$a = '78';
$b = 78;

echo var_dump($a == $b);
echo var_dump($a === $b);

//task37
$a = (bool)20;
echo var_dump($a);
// любое число кроме нуля будет TRUE

//task38
$a = 0;
echo var_dump(!!$a);
// ноль будет false

//task39
$a = (bool)-20;
echo var_dump(!!$a);
//как и любое число кроме нуля будет true

// task40
echo '1 строка';
print_r('2 строка');
print "3 строка \n";

//task41
/*commentary number 1*/
//second
# third

//task42
// просто короткая форма записи

// task43
const DAYS_COUNT = 7;
define("MONTH_COUNT", "12");

// task44
// php my_script.php

//task45
$arr  = array('html', 'css', 'php', 'js', 'jq');
foreach ($arr as $item)
{
    echo "$item \n";
}

//task46
$arr_2 = array(1, 20, 15, 17, 24, 35);
$result = 0;
foreach ($arr_2 as $item) 
{
    $result += $item;
}

echo "$result \n";

//task47
$arr_3 = array(26, 17, 136, 12, 79, 15);
$result = 0;
foreach ($arr_3 as $item) 
{
    $result += $item * $item;
}
echo "$result \n";

//task48
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $key => $value) {
    echo "this is key = {$key} \n";
}

foreach ($arr as $key => $value) {
    echo "this is value = {$value} \n";
}

//task49
$arr = array('Коля' => '200', 'Вася' => '300', 'Петя' => '400');

foreach ($arr as $key => $value) {
    echo "{$key} - зарплата {$value} долларов \n";
}

//task50 
$arr = array('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');
$ru = [];
$en = [];
$k = 0;
foreach ($arr as $key => $value) {
    $en[$k] = $key;
    $ru[$k] = $value;
    $k++;
}

echo print_r($ru);
echo print_r($en);

//task51
$arr_new = array(2, 5, 9, 15, 0, 4);

foreach ($arr_new as $value) {
    if($value >= 3 && $value < 10){
        echo "\n $value \n";
    }
   
}

//task52
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$str = '';
foreach ($arr as $value) {
    $str .= $value;
}
echo "$str \n";

//task53
for ($i = 1; $i <= 100; $i++) {
    echo "{$i} \n";
}

//task54
for ($i = 11; $i <= 33; $i++) {
    echo "{$i} \n";
}

//task55
for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 === 0) {
        echo "{$i} \n";
    } 
}

//task56
$n = 1000;
$num = 0;
while ($n > 50) {
    $n /= 2;
    $num++;
}
echo "{$num} {$n}\n";

//task57
for($i = 1; $i <= 10; $i++) {
    for($j = 1; $j <= 10; $j++){
        $res = $i * $j;
        echo "{$res}  ";
    }
    echo "\n";
}

//task58
$arr = array(4, 2, 5, 19, 13, 0, 10);
foreach ($arr as $item) {
    if($item === 2 || $item === 3 || $item === 4) {
        echo "{$item}-Есть! ";
    } else {
        echo "{$item}-Нет! ";
    }
}

//task59
$count = 0;
$arr = array(4, 2, 5, 19, 13, 0, 10);
foreach ($arr as $item) {
    $count++;
}
echo "\n {$count}";

//task60
$count = 0;
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

foreach ($arr as $item) {
    if($count === 3) {
        echo "\n";
        $count = 0;
    }
    echo "{$item}, ";
    $count++;
}



echo "\n";