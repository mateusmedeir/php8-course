<?php

$value = 10;

//$add = fn($a, $b) => $a + $b * $value;

$add = function ($a, $b) use ($value) {
    return $a + $b * $value;
};

echo $add(10, 25);