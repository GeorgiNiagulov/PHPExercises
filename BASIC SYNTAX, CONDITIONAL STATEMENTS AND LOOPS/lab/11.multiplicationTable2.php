<?php 

$num = readline();
$multiplier = readline();
if ($multiplier > 10) {
    $multiply = $multiplier*$num;
    echo "$num X $multiplier = $multiply".PHP_EOL;
    return;
} else {
    for ($i=$multiplier; $i <=10 ; $i++) { 
        $multiply = $i*$num;
        echo "$num X $i = $multiply".PHP_EOL;  
    }
}
