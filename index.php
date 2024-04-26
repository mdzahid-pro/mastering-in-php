<?php

// php data types
// ==================================
// Strings
$string = 'Class number two';
var_dump($string);
// Integer -2147483648 = 2147483647
$integer = 1234;
var_dump($integer);
// Float
$float = 123.45;
var_dump($float);
// Boolean
$boolean = true; // 0 / 1
// Array
$array = array('class one','class two','class three');
var_dump($array);
$array[1] = "class three";
var_dump($array[1]);
// Object
readonly class car
{
    public function __construct(public string $color, public string $model){
    }

    public function message(): string
    {
        return "My car is a" . $this->color;
    }
}

$testClass = new car('Green', '2000');

var_dump($testClass);
var_dump($testClass->message());
// NUll
$null = null;
$isNotNull = "";
var_dump("is not null", $isNotNull);
var_dump($null);
// Resource
function test(){

}