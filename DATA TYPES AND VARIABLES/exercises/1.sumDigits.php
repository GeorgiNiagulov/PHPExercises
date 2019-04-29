<?php
$number = readline();
$sum = 0;
$length = strlen($number);
for($i = 0;$i<$length;$i++){
    $sum += $number%10; //$sum += $number($length-$i-1);
    $number/=10;
}
echo $sum;