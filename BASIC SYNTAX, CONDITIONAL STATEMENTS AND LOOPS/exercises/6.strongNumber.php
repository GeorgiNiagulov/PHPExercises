<?php
$number = readline();
$sum = 0;
for ($i= 0; $i<strlen($number);$i++){
    $fact = 1;
    for ($j = 1; $j<=intval($number[$i]); $j++) {
        $fact *= $j;
    }
    $sum += $fact;
}

if ($sum == intval($number)) {
    echo "yes";
} else {
    echo "no";
}