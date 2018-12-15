<?php


//task56
$n = 1000;
$num = 0;
while ($n > 50) {
    $n /= 2;
    $num++;
}
echo "{$num} {$n}\n";
