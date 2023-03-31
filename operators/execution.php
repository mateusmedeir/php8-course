<?php

$result = `ping -n 3 google.com.br`;

$oem = sapi_windows_cp_get("oem");

$result = sapi_windows_cp_conv(
    $oem, 
    65001, 
    $result
);

echo "<pre>$result</pre>";