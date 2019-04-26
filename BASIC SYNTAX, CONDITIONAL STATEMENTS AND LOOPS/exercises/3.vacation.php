<?php
$group = intval(readline());
$type = readline();
$day = readline();
$price = 0;
    if ($day === "Friday") {
        if ($type === "Students") {
            $price = 8.45;
        } else if ($type === "Business") {
            $price = 10.90;
        } else if ($type === "Regular") {
            $price = 15;
        }
    } else if ($day === "Saturday") {
        if ($type === "Students") {
            $price = 9.80;
        } else if ($type === "Business") {
            $price = 15.60;
        } else if ($type === "Regular") {
            $price = 20;
        }
    } else if ($day === "Sunday") {
        if ($type === "Students") {
            $price = 10.46;
        } else if ($type === "Business") {
            $price = 16;
        } else if ($type === "Regular") {
            $price = 22.50;
        }
    }

    if ($type === "Students") {
        if ($group >= 30) {
            $price = ($group * ($price * 0.85));
        } else {
            $price = ($group * $price);
        }
    } else if ($type === "Business") {
        if ($group >= 100) {
            $price = (($group - 10) * $price);
        } else {
            $price = ($group * $price);
        }
    } else if ($type === "Regular") {
        if ($group >= 10 && $group <= 20) {
            $price = (($group * $price) * 0.95);
        } else {
            $price = ($group * $price);
        }
    }
    printf("Total price: %.2f", $price);