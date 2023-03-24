<?php
$total = 200.00;

$value = $total;

$discount = 33;
$formula = $discount / 100;

$value *= $formula;

$total -= $value;

echo $total;
