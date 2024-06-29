<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);

trigger_error('This is an custom error', E_USER_ERROR);


echo $e;

function customErrorHandler(
    int $error,
    string $msg,
    ?string $file,
    ?int $line
){
    echo "Custom Error: $msg in $file on line $line";

    exit;
}

error_reporting(E_ALL && ~E_USER_WARNING);

set_error_handler("customErrorHandler", E_ALL);

echo $e;