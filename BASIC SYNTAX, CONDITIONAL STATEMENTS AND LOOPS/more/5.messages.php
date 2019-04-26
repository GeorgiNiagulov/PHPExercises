<?php

$num = intval(readline());

for ($i=0; $i < $num; $i++) { 
   $command = readline();
   if ($command == 0) {
      echo " ";
   } else {
       $currentDigit = $command[0];
       if ($currentDigit == 8 || $currentDigit == 9) {
           $char = ($currentDigit - 2)*3 + (strlen($command));
           $toPrint = chr($char+97);
           echo $toPrint;
       } else{
        $char = ($currentDigit - 2)*3 + (strlen($command)-1);
        $toPrint = chr($char+97);
        echo $toPrint;
       }
   }
}