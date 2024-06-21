<?php

// functions types in php
// variable, anonymous lambda, closure and arrow function

// variable

//$anonymous = function ($a, $b) { // user defined function
//    return $a + $b;
//};
//
//echo $anonymous(10, 20);
//die();
//
//
//$v = "add";
//
//if(is_callable($v)) {
//    echo $v(10, 20);
//    // add(10, 20)
//}else{
//    echo "Not callable";
//}
//
$x = 10;

//$foo = function () use ($x)
//{
//    echo "variable x = $x";
//};
//
//echo $foo();

//function foo(){
//    global $x;
//    echo $x;
//}
//
//echo foo();


function arrayMap(closure $callback, array $numbers): array {
    $temp = [];
    foreach ($numbers as $number) {
        $temp[] = $callback($number);
    }

    return $temp;
};


$numbers = [1,2,3,4,5];

function call($number){
    return $number * 2;
};

//$updatedNumbers = arrayMap(function ($number){
//    return $number * 2;
//}, $numbers);

// arrow function example
$updatedNumbers = arrayMap(fn ($number) => $number * 2, $numbers);

echo "<pre>";
print_r($numbers);
echo "</pre>";

echo "<pre>";
print_r($updatedNumbers);
echo "</pre>";