<?php

if(isset($_GET['a']) && isset($_GET['b']) && isset($_GET['id'])) {

    $a = strip_tags($_GET['a']);
    $b = strip_tags($_GET['b']);
    $operation = strip_tags($_GET['id']);

}

if(empty($_GET['a']) || empty($_GET['b'])){$error = "Заполните поля.";};

if ($operation == '-')
{
    $d = $a - $b;
}
elseif ($operation == '+')
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