<?php

$price = 1000.00;
$discount = 10;
$freight = 35.49;

$total = $price * (1 - ($discount / 100)) + $freight;

$buy = $total <= $price && $total < 1200;

var_dump($total);
echo "<br/>";
var_dump($buy);