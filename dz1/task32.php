<?php

// task 32
$a = 4;
$b = 0;
$operator = '/';

switch($operator) {
    case '+':
        echo "\n result {$a} {$operator} {$b} = ", $a + $b;
        break;
    case '-':
        echo "\n result  {$a} {$operator} {$b} = ", $a - $b;
        break;
    case '*':
        echo "\n result  {$a} {$operator} {$b} = ", $a * $b;
        break;
    case '/':
        if($b){
            echo "\n result  {$a} {$operator} {$b} = ", $a / $b;
            break;
        } else {
            echo "\n division by zero";
            break;
        }
        
    case '%':
        if($b) {
            echo "\n result  {$a} {$operator} {$b} = ", $a % $b;
            break;
        } else {
            echo "\n division by zero";
            break;
        }
        
}

