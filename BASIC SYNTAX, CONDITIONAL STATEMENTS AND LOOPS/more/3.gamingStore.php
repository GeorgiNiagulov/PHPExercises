<?php 

$currentBalance = floatval(readline());
$spent = 0;

while (true) {
  $command = readline();
  if ($command === "Game Time") {
    break;
  }
  if ($currentBalance <=0) {
    echo "Out of money!";
  }
  if ($command === "OutFall 4") { 
    if ($currentBalance >=39.99) { 
      $currentBalance -=39.99;
      $spent +=39.99;
      echo "Bought OutFall 4".PHP_EOL;
    } else{
      echo "Too Expensive".PHP_EOL;
    }
  } elseif ($command === "CS: OG") {
    if ($currentBalance >=15.99) {
      $currentBalance -=15.99;
      $spent +=15.99;
      echo "Bought CS: OG".PHP_EOL;
    } else{
      echo "Too Expensive".PHP_EOL;
    }
  } elseif ($command === "Zplinter Zell") {
    if ($currentBalance >= 19.99) {
      $currentBalance -=19.99;
      $spent +=19.99;
      echo "Bought Zplinter Zell".PHP_EOL;
    } else{
      echo "Too Expensive".PHP_EOL;
    } 
  } elseif ($command === "Honored 2") {
    if ($currentBalance >=59.99) {
      $currentBalance -=59.99;
      $spent +=59.99;
      echo "Bought Honored 2".PHP_EOL;
    } else{
      echo "Too Expensive".PHP_EOL;
    } 
  } elseif ($command === "RoverWatch") {
    if ($currentBalance >=29.99) {
      $currentBalance -=29.99;
      $spent +=29.99;
      echo "Bought RoverWatch".PHP_EOL;
    }  else{
      echo "Too Expensive".PHP_EOL;
    } 
  } elseif ($command === "RoverWatch Origins Edition") {
    if ($currentBalance >=39.99) {
      $currentBalance -=39.99;
      $spent +=39.99;
      echo "Bought RoverWatch Origins Edition".PHP_EOL;
    }  else{
      echo "Too Expensive".PHP_EOL;
    }
  } else{
    echo "Not Found".PHP_EOL;
  }
}
printf("Total spent: $%.2f. Remaining: $%.2f", $spent,$currentBalance);