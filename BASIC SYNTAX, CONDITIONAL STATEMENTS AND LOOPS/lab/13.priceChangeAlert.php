<?php

$numberOfPrices = intval(readline());
$significanceThreshold =floatval(readline());
$last = floatval(readline());

for ($i=0; $i < $numberOfPrices-1; $i++) { 
    $current = floatval(readline());
    $divide = ($current-$last)/$last;

    $isSignificantDifference = abs($divide)>=$significanceThreshold;

    $total = "";
    if ($divide == 0) {
        $total = "NO CHANGE: $current";
    } elseif (!$isSignificantDifference) {
        $total = sprintf("MINOR CHANGE: %f to %f (%.2f%%)", $last, $current, $divide * 100);
    } elseif ($isSignificantDifference && ($divide)>0) {
        $total = sprintf("PRICE UP: %f to %f (%.2f%%)", $last, $current, $divide * 100);
    } elseif ($isSignificantDifference && ($divide)<0) {
        $total = sprintf("PRICE DOWN: %f to %f (%.2f%%)", $last, $current, $divide * 100);
    } 
    echo $total.PHP_EOL;
    $last = $current;
}