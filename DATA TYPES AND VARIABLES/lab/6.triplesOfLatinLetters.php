<?php

$num = intval(readline());
for ($i=0; $i <= $num - 1; $i++) { 
  $char = chr(97 + $i);
  for ($j=0; $j <= $num - 1 ; $j++) { 
    $secondChar = chr(97 + $j);
    for ($k=0; $k <= $num - 1; $k++) { 
      $thirdChar = chr(97 + $k);
      echo $char.$secondChar.$thirdChar.PHP_EOL;
    }
  }
}