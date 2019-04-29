<?php
$pokePower = intval(readline());
$distance  = intval(readline());
$exhaustionFactor = intval(readline());
$count = 0;
$subtract = $pokePower;
while($subtract>=$distance){
    $subtract -= $distance;
    $count++;
    if ($subtract == 0.5*$pokePower && $exhaustionFactor > 0){
        $subtract/=$exhaustionFactor;
    }
}
echo floor($subtract).PHP_EOL;
echo $count;