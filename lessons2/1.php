<?php

$a = rand(-10,10);
$b = rand(-10,10);

if ($a >= 0 && $b >=0){
    $c = $a - $b;
    echo "a - b = $c";}

else if ($a < 0 && $b < 0){
    $c = $a * $b;
    echo "a + b = $c";}

else if ($a < 0 && $b > 0 || $a > 0 && $b < 0){
    $c = $a + $b;
    echo "a * b = $c";}

