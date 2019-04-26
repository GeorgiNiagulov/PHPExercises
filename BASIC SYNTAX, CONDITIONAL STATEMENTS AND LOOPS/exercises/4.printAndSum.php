<?php
$first = intval(readline());
$last = intval(readline());
$sum = 0;
for ($i = $first;$i<=$last;$i++){
    $sum+=$i;
    echo "$i ";
}
echo PHP_EOL;
echo "Sum: ".$sum;