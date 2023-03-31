<?php
// Exercise 1

$authorized = true;
$admin = true;
$name = "Test";

if ($authorized == true && $admin == true) {
    echo "Administrative area: $name, Welcome!<br/>";
}

// Exercise 2

$amount = 2;
$value = 1200.00;
$freight = 40.00;

$subtotal = ($amount * $value);

if ($amount > 3) {
    $subtotal *= 0.9;
} else {
    $subtotal *= 0.95;
}
$subtotal += $freight;
var_dump($subtotal);

echo "<br/>";

// Exercise 3

echo "<select>";

for ($year = 1920; $year <= 2022; $year++){
    echo "<option value='$year' " . ($year == 2021 ? "selected='selected'" : "") . ">$year</option>";
}

echo "</select>";