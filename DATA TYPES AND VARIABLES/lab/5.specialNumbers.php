<?php

$num = intval(readline());

for ($i=1; $i <=$num; $i++) { 
  $sum = 0;
  $current = $i%10;
  $first = floor($i/10);
  $sum = $current+$first;
  if ($sum == 5 || $sum == 7 || $sum == 11) {
    echo "$i -> True".PHP_EOL;
  } else {
    echo "$i -> False".PHP_EOL;
  }
}