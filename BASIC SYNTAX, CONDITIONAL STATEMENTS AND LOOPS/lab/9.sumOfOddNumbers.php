<?php

$oddNumbers = intval(readline());
$sum = 0;
$odd = 1;

for ($i=1; $i <= $oddNumbers; $i++) { 
        $sum+=$odd;
        echo $odd.PHP_EOL;
        $odd+=2;
}
echo "Sum: $sum";
