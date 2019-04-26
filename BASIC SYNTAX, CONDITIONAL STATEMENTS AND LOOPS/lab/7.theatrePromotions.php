<?php

$typeDay = readline();
$age = intval(readline());

if ($age>=0 && $age <=18) {
    switch ($typeDay) {
        case 'Weekday':
            echo '12$';
            break;
            case 'Weekend':
            echo '15$';
            break;
            case 'Holiday':
            echo '5$';
            break;
    }
} elseif($age > 18 && $age <=64) {
    switch ($typeDay) {
        case 'Weekday':
            echo '18$';
            break;
            case 'Weekend':
            echo '20$';
            break;
            case 'Holiday':
            echo '12$';
            break;
    }
} elseif($age > 64 && $age <=122) {
    switch ($typeDay) {
        case 'Weekday':
            echo '12$';
            break;
            case 'Weekend':
            echo '15$';
            break;
            case 'Holiday':
            echo '10$';
            break;
    }
} else {
    echo "Error!";
}