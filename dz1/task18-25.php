<?php
// task18
$name = "Sasha";

// task19
$age = 31;

//task20
echo "Меня зовут: {$name} \n";

//task21
echo "Мне {$age} лет \n";

//task22
if($age >= 18 && $age <=59 )
{
    echo "Вам еще работать и работать \n";
}

//task23
$age = 71;
if($age >= 18 && $age <=59 )
{
    echo "Вам еще работать и работать \n";
} elseif ($age > 59)
{
    echo "Вам пора на пенсию \n";
}

//task24 
$age = 11;
if($age >= 18 && $age <=59 )
{
    echo "Вам еще работать и работать \n";
} 
    elseif ($age > 59)
{
    echo "Вам пора на пенсию \n";
} 
    elseif($age>=0 && $age<=17)
{
    echo "Вам еще рано работать \n";
}

//task25
$age = 'hello';
if ($age >= 18 && $age <=59)
{
    echo "Вам еще работать и работать \n";
} 
    elseif ($age > 59)
{
    echo "Вам пора на пенсию \n";
} 
    elseif($age > 0 && $age <= 17 )
{
    echo "Вам еще рано работать \n";
}
    else
{
    echo "Неизвестный возраст \n";
}

