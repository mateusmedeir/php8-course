<?php

function recursive($a)
{

    if ($a < 100) {
        echo $a . " ";
        recursive(++$a);
    }

}

recursive(0);