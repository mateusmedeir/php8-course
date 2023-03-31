<?php

$name = 11;

switch ($name) {
    case 9:
    case 10:
        echo "Option 1";
    break;
    case "Test":
        echo "Option 2";
    break;
    default:
        echo "...";
}