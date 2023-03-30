<?php

$name = "Mateus";
$age = 20;
$sport = "Football";

$array = ["Spring", "Laravel", "React"];
var_dump($age);
echo "<br/>";
settype($age, "string");
var_dump($age);
echo "<br/>";

function writeMe(): void {
    global $name, $age, $sport;
    echo "name: $name, age: $age, sport: $sport";
}

writeMe();
