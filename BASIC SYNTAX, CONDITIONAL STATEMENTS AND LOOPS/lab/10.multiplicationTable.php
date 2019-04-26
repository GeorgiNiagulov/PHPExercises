<?php

$num = readline();
$multiply = 0;
for ($i=1; $i <=10 ; $i++) { 
    $multiply = $i*$num;
    echo "$num X $i = $multiply".PHP_EOL;
    $multiply = 0;
}