<?php

// global scope, local scope, global keyword, global variables, static variable
$x = 10;

//include "variable.php";

function staticFunction(){
    sleep(2);

    echo "static functions";

    return 20;
}

function foo(): ?int
{
    static $y = null;

    if($y == null){
        $y = staticFunction();
    }

    return $y;
}

echo foo(). '<br>';
echo foo(). '<br>';
echo foo(). '<br>';
echo foo(). '<br>';