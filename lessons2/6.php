<?php

$pow = rand(1,10);
function power($val, $pow){
    if($pow == 0){
        return 1;
    }
    return $res = $val*power($val, $pow-1);
}
echo "Число $val в степени $pow = " .power($val, $pow);