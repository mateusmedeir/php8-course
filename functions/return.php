<?php

function add(float $value1, float $value2): string
{

    return $value1 + $value2;

}

$result = add(10, 20);

var_dump(add($result, 50));