<?php

$numPeople = intval(readline());
$capacity = intval(readline());

$courses = ceil($numPeople/$capacity);
echo $courses;