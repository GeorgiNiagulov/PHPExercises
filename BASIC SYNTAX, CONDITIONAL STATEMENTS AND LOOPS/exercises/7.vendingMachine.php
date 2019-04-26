<?php
$price = 0;
$sum = 0;

while (true) {
    $input = readline();
    if ($input == "Start") {
        break;
    }
    $money = $input;
    if ($money == 0.1 || $money == 0.2 || $money == 0.5 || $money == 1.0 || $money == 2.0) {
        $sum += $money;
    } else {
        printf("Cannot accept %.2f\n", $money);
    }
}
$isEnd = false;
while (true) {
    $item = readline();
    if ($item === "End") {
        break;
    }
    switch ($item) {
        case "Nuts":
            $price = doubleval(2.0);
            $isEnd = true;
            break;
        case "Water":
            $price = 0.7;
            $isEnd = true;
            break;
        case "Crisps":
            $price = 1.5;
            $isEnd = true;
            break;
        case "Soda":
            $price = doubleval(0.8);
            $isEnd = true;
            break;
        case "Coke":
            $price = 1.0;
            $isEnd = true;
            break;
        default:
            printf("Invalid product\n");
            break;
    }
    $item1 = strtolower($item);
    $sum = round($sum,2);
    $price = round($price,2);
    if ($isEnd) {
        if ($sum >= $price) {
            printf("Purchased %s\n", $item1);;
            $sum = $sum - $price;
        } else {
            printf("Sorry, not enough money\n");
        }
    }
}
printf("Change: %.2f", $sum);