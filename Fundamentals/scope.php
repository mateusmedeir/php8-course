<?php

$test = "https://google.com";

function display(){
    global $test;
    echo $test;
}

display();