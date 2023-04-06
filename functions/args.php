<?php

$a = 50;

function add(&$numberA, int $numberB = 10)
{
    $numberA += $numberB;
    echo $numberA . "<br/>";
}

add($a, 5);

add(
    numberB: 30,
    numberA: $a
);

echo "Now out of function: $a";    
