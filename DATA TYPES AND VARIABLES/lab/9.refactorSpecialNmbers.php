<?php
$num = intval(readline());
$sum = 0;
$isTrue = false;
for ($i = 1; $i <= $num; $i++) {
    $current = $i;
    while ($i > 0) {
        $sum += $i % 10;
        $i = $i / 10;
    }
    $isTrue = ($sum == 5 || $sum == 7 || $sum == 11);
    $result = $isTrue ? "True" : "False";
    echo sprintf("%d -> %s", $current, $result) . PHP_EOL;
    $sum = 0;
    $i = $current;
}