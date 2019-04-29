<?php

$firstFloat = floatval(readline());
$secondFloat = floatval(readline());

$eps = abs($firstFloat - $secondFloat);
if ($eps <= 0.000001) {
  echo "True";
} else {
  echo "False";
}