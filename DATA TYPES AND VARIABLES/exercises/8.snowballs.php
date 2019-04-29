<?php
$numOfSnowballs = intval(readline());
$snowballValue = 0;
$currSnowValue = 0;
$bestSnowballSnow = 0;
$bestSnowballTime = 0;
$bestSnowballQuality = 0;
for ($i = 0;$i<$numOfSnowballs;$i++){
    $snowballSnow = intval(readline());
    $snowballTime = intval(readline());
    $snowballQuality = intval(readline());
    $snowballValue = bcpow(($snowballSnow / $snowballTime) , $snowballQuality);
    if ($snowballValue > $currSnowValue){
        $bestSnowballSnow = $snowballSnow;
        $bestSnowballTime = $snowballTime;
        $bestSnowballQuality =$snowballQuality;
        $currSnowValue = $snowballValue;
    }
}
echo "$bestSnowballSnow : $bestSnowballTime = $currSnowValue ($bestSnowballQuality)";