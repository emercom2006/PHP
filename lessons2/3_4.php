<?php

$arg1 = rand(1,10);
$arg2 = rand (1,10);
$arr = ["sum","difference","multiplication","division"];
$operation1 = $arr[rand(0,3)];
$a = $arg1;
$b = $arg2;
$operation = $operation1;

function sum($a,$b)
{
    $res = $a + $b;
    echo "Сумма $a и $b = $res";
    return;
}

function difference($a,$b)
{
    $res = $a - $b;
    echo "Вычитание $a из $b = $res";
    return;
}

function multiplication($a,$b)
{
    $res = $a * $b;
    echo "Произведение $a на $b = $res";
    return;
}

function division($a,$b)
{
    $res = $a / $b;
    echo "Деление $a на $b = $res";
    return;
}

function mathOperation($a,$b,$operation){
    switch ($operation) {
        case "sum" :
            sum($a,$b);
            break;
        case "difference":
            difference($a,$b);
            break;
        case "multiplication" :
            multiplication($a,$b);
            break;
        case "division" :
            division($a,$b);
            break;
    }
    return;
}

mathOperation($a, $b, $operation);

