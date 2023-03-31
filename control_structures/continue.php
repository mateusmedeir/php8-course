<?php

for ($counter = 0; $counter <= 250; $counter++) {
    if($counter >= 118 && $counter <= 125){
        continue;
    }
    echo $counter . " ";
}
