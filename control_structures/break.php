<?php

$read = 20;
$eof = 250;
while ($read <= $eof) {

    if($read == 80) {
       echo "getting out of the loop" . "<br/>";
        break;
    }
$read += 20;
echo $read."<br/>";
}

echo "Outside of while<br/>";

for ($x = 1; $x <= 10; $x++) {
    for ($y = 1; $y <= 10; $y++) {
        if ($x * $y > 25) {
            break 2;
        }
        echo "$x x $y = " . ($x * $y) . "<br/>";
    }
}