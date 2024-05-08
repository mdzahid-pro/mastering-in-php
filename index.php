<?php

// PHP OPERATORS
// Arithmetic operators
// + - * / % **
//$number_value = 100;
//$number = 3;
//
//echo $number_value ** $number;



// Assignment operators
// = += -= *= /= %=

//$number_value = 100;
//$number_value %= 20;
//
//echo $number_value;


// Comparison Operators
// == , ===, != , !== , > , < , >= , <= , <=>

//$x = 9;
//$y = 10;
//
//$comparison = $x <=> $y;
// false | true
//var_dump($comparison);

// Increment / decrement = operators

//$x = 9;
//
//echo --$x;

// Logical operators
// and, or, xor, &&, || , !
//$x = 10;
//$y = 20;
//
////var_dump($x === 11 or $y === 20);
//$condition = ($x == 11 xor $y == 20);
//
//var_dump($condition);

// string operator
$string = "Md Zahidul" . " Islam";
$string .= " Islam";

//echo $string;
// array operator
// + == === != <> !==
$array1 = [1,2,3];
$array2 = [1,2,4];

$union = $array1 + $array2;
$equality = $array1 <> $array2;
//var_dump($equality);

// Conditional assignment operator
// ternary Null coalescing
// ?:
// ??
$x = null;
$y = 20;

$ternary = $x === 10 ? "Condition passed" : "Condition failed";
$nullCoalescing = $x ?? "Value not found!";

//var_dump($nullCoalescing);




//spaceship operator example

//$array = [3,1,5,7,9,2,4,6,8];
//usort($array, function ($a, $b) {
//    return $a <=> $b;
//});
//echo "<pre>";
//var_dump($array);