<?php 

while(true){
    $number = abs(readline());
    if ($number%2==0){
        echo "The number is: $number";
        break;
    }
    echo "Please write an even number.".PHP_EOL;
    $number = 0;
}