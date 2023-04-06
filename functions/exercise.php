<?php

function calIRPF($salary, $dependents) {
    if ($salary <= 1903.98){
        $aliquot = 0;
        $deduction = 0;
    } else if ($salary <= 2826.65){
        $aliquot = 7.5;
        $deduction = 142.8;
    }else if ($salary <= 3751.05){
        $aliquot = 15;
        $deduction = 354.8;
    }else if ($salary <= 4664.68){
        $aliquot = 22.5;
        $deduction = 636.13;
    }else{
        $aliquot = 27.5;
        $deduction = 869.36;
    }
    $tax = (($salary - ($dependents * 189.59)) * ($aliquot/100))  - $deduction;
    echo $tax;
};

$formataLink = fn($url, $text) => "<a href='$url'>$text</a>";
echo $formataLink("https://google.com", "Google");