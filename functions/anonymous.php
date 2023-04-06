<?php

$company = function($site, $tel)
{
    return "https://$site<br/>Tel: $tel";
};

function add($a, $b, $callback)
{

    $callback($a + $b);

}

$fn = function($result) use ($company) {

    echo $company("google.com.br", "000000-0000");

    var_dump($result);

};

add(2, 3, $fn);
add(5, 5, $fn);