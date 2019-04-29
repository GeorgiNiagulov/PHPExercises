<?php
$symbol = readline();
if(ord($symbol)>64 && ord($symbol)<91){
    echo "upper-case";
} elseif(ord($symbol)>96 && ord($symbol)<123){
    echo "lower-case";
}
