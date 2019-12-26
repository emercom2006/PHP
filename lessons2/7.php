<?php
$h = date(H);
$i = date(i);


if ($h == 1 || $h == 21){
    $a = 'час';
}

else if ($h >= 2 && $h <= 4 || $h >= 22 && $h <= 24){
    $a = 'часа';
}

else if ($h >= 5 && $h <= 20){
    $a = 'часов';
}

if ($i == 1 || $i == 21 || $i == 31 || $i == 41 || $i == 51) {
    $b = 'минута';
}
else if($i >= 2 && $i <= 4 || $i >= 22 && $i <= 24 || $i >= 32 && $i <= 34 || $i >= 42 && $i <= 44 || $i >= 52 && $i <= 54){
    $b = 'минуты';
}

else if($i >= 5 && $i <= 20 || $i >= 25 && $i <= 30 || $i >= 35 && $i <= 40 || $i >= 45 && $i <= 50 || $i >= 55 && $i <= 60){
    $b = 'минут';
}

echo "Сейчас $h $a $i $b";

?><br><?php

$hour = date(H);
$minutes = date(i);
function num_word($value, $words, $show = true)
{
    $num = $value % 100;
    if ($num > 19) {
        $num = $num % 10;
    }

    $out = ($show) ?  $value . ' ' : '';
    switch ($num) {
        case 1:  $out .= $words[0]; break;
        case 2:
        case 3:
        case 4:  $out .= $words[1]; break;
        default: $out .= $words[2]; break;
    }

    return $out;
}
echo "Сейчас ".num_word($hour, array('час ', 'часа ', 'часов '));
echo num_word($minutes, array('минута', 'минуты', 'минут'));
