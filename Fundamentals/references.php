<?php 

$a =50;

$b = &$a;
$c = $a;

var_dump("a: ", $a);
echo "<br/>";
var_dump("b: ", $b);
echo "<br/>";
var_dump("c: ", $c);

$a = 500;

echo "<br/>";
var_dump("a: ", $a);
echo "<br/>";
var_dump("b: ", $b);
echo "<br/>";
var_dump(10 <=> 5);