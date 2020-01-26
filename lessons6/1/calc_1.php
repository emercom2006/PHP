<?php


if(isset($_GET['a']) && isset($_GET['operation']) && isset($_GET['b'])) {

    $a = strip_tags($_GET['a']);
    $operation = strip_tags($_GET['operation']);
    $b = strip_tags($_GET['b']);
}
if(empty($_GET['a']) || empty($_GET['b'])){$error = "Заполните поля.";};
if ($operation == '-')
{
    $d = $a - $b;
}
elseif
($operation == '+')
{
    $d = $a + $b;
}
elseif ($operation == '*')
{
    $d = $a * $b;
}
elseif($operation == '/' && $b != 0)
{
    $d = $a / $b;
}
?>