<?php

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

