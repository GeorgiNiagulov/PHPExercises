<?php 
$a = intval(readline());
$b = intval(readline());
$c = intval(readline());

$max = max($a, $b, $c);
$min = min($a, $b, $c);

$mid = $a+$b+$c - $max - $min;

echo $max.PHP_EOL;
echo $mid.PHP_EOL;
echo $min.PHP_EOL;
