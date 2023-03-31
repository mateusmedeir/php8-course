<?php

$msg = "200";

$return = match($msg) {
	"200" => "Success",
	"300" => "Redirect",
	"400" => "Error",
	default => "Default"
};