<?php


//task58
$arr = array(4, 2, 5, 19, 13, 0, 10);
foreach ($arr as $item) {
    if($item === 2 || $item === 3 || $item === 4) {
        echo "{$item}-Есть! ";
    } else {
        echo "{$item}-Нет! ";
    }
}
