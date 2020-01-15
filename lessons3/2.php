<?php
$i = 0;
do {
    if($i == 0)
        echo "$i - ноль <br>";
    if($i > 0 && $i%2 == 0)
    echo "$i - четное число <br>";
    if($i > 0 && $i%2 != 0)
        echo "$i - нечетное число <br>";
    ++$i;
}
    while ($i <10);