<?php 

$budget = floatval(readline());
$students = intval(readline());
$priceLightsaber = floatval(readline());
$priceRobe = floatval(readline());
$priceBelt = floatval(readline());

$lightsaberCount = ceil($students*1.1);
$freeBelts = floor($students/6);
$robesPrice = $students*$priceRobe;
$lightsabersPrice = $lightsaberCount*$priceLightsaber;
$beltsPrice = ($students - $freeBelts)*$priceBelt;

$neededBudget = $robesPrice+$lightsabersPrice+$beltsPrice;
 if ($budget >= $neededBudget) {
     printf("The money is enough - it would cost %.2flv.",$neededBudget);
 } else {
     $needed = $neededBudget - $budget;
     printf("Ivan Cho will need %.2flv more.", $needed);
 }