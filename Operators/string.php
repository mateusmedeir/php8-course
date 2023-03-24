<?php

$firstName = "João";
$lastName = "Rangel";

$fullName = $firstName . " " . $lastName;

var_dump($fullName);

echo "<br/>";

$text = "Lorem ipsum dolor sit";
$text .= "ametconsectetur adipisicing";
$text .= "elit. Nulla provident repellat,";

echo $text . "<br/>";

$text2 = <<<HCODE
<pre>
$fullName
Lorem ipsum dolor sit amet consectetur 

adipisicing elit. Nobis nam alias 

explicabo quaerat pariatur? Animi nostrum

labore quod qui culpa expedita.

Soluta ad beatae doloribus ducimus? Reprehenderit quae officiis est?
</pre>
HCODE;

echo $text2;