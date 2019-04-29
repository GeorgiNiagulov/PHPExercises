<?php 

$num = intval(readline());
while ($num > 0) {
  $sum = 0;
  $input = explode(" ",readline());
  $left = $input[0];
  $right = $input[1];
  if (is_numeric($left) && is_numeric($right)) {
    if ($left > $right) {
      for ($i = 0; $i < strlen($left); $i++) { 
        @$sum += $left[$i];
      }
    }  else {
      for ($i = 0; $i < strlen($right); $i++) { 
        @$sum += $right[$i];
      }
    }
  }
  echo $sum.PHP_EOL;
  $num--;
}

