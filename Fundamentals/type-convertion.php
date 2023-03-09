<?php 

$value = "1";

$value *= 2;
$value *= 2.3;
$newValue = (string) $value;

var_dump(get_debug_type($newValue));
echo "<br/>";
var_dump($newValue);
settype($newValue, "int");
echo "<br/>";
var_dump($newValue);
echo "<br/>";
var_dump(get_debug_type($newValue));