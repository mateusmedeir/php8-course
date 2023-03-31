<?php

$a = 10;
$b = $a + 1;
 
if ($a > $b) {
    echo "Yes";
} elseif ($a == $b) {
    echo "Equal";
} else {
    echo "No";
}

echo "<br/>";

echo $a < $b ? "Yes" : "No";