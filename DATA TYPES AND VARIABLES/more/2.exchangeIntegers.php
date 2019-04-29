<?php

$first = intval(readline());
$second = intval(readline());

$currentOne = $first;
$currentTwo = $second;

$first = $currentTwo;
$second = $currentOne;

echo "Before:".PHP_EOL;
echo "a = $currentOne".PHP_EOL;
echo "b = $currentTwo".PHP_EOL;
echo "After:".PHP_EOL;
echo "a = $first".PHP_EOL;
echo "b = $second".PHP_EOL;