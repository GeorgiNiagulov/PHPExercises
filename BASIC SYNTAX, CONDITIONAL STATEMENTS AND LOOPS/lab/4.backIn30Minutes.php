<?php

$hours = intval(readline());
$minutes = intval(readline());

$afterThirty = ($minutes+30);
$added = floor($afterThirty/60);
$afterThirty = $afterThirty%60;
$hours = $hours+$added;

if ($hours > 23) {
    $hours = $hours - 24;
}
if ($afterThirty < 9) {
    echo $hours.":0".$afterThirty;
} else{
    echo $hours.":".$afterThirty;
}

