<?php

$valueA = 10;
$valueB = 11;

var_dump($valueA <=> $valueB);

$valueC = NULL;

var_dump($valueC ?? "There is no value");