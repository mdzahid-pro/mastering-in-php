<?php

//declare(strict_types=1);
//
//// drawing square shape
//$size = 0;
//
//for ($row = 0; $row < $size; $row++) {
//    for ($col = 0; $col < $size; $col++) {
//        echo " * ";
//    }
//
//    echo "\n";
//}
//
//// drawing a right triangle
//for ($row = 0; $row < $size; $row++) {
//    for ($col =1; $col <= $row; $col++){
//        echo "* ";
//    }
//
//    echo "\n";
//}
//
////echo "\n=========================== \n\n";
//
//// drawing an inverted right triangle
//for ($row = $size; $row > 0; $row--) {
//    for ($col = 1; $col <= $row; $col++) {
//        echo "* ";
//    }
//
//    echo "\n";
//}
//
//
////echo "\n=========================== \n\n";
//
//// drawing a pyramid
//for ($row = 1; $row <= $size; $row++) {
//    // print spaces before start
//    for ($space = $size - $row; $space > 0; $space--){
//        echo "  ";
//    }
//
//    // print starts after spaces
//    for ($col = 1; $col <= (2 * $row - 1); $col++){
//        echo "* ";
//    }
//
//    echo "\n";
//}
//
//
//// drawing a diamond
//for ($row = $size -1; $row > 0; $row--) {
//    for ($space = 0; $space < $size - $row; $space++) {
//        echo "  ";
//    }
//
//    for ($col = 1; $col <= (2 * $row - 1); $col++){
//        echo "* ";
//    }
//
//    echo "\n";
//}
//
//
//
//
//
//// function in php
//
//// User defined function
//function sum(int $a,int $b): int
//{
//    return $a + $b;
//}
//
////echo sum(10, '20') . "\n";
//// anonymous function
//$greet = function ($name){
//    return "Hello $name";
//};
//
////echo $greet("Md Zahid") . "\n";
//// built in function
////echo strlen($greet("Md Zahid"));
//// arrow function
//$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
//$squared = array_map(fn($n) => $n ** 2, $numbers);
//
////print_r($squared);
//// conditional function
//$makeGreeting = true;
//
//if($makeGreeting){
//    function greeting(string $name): string
//    {
//        return "Hello $name";
//    }
//}
//
////echo "\n";
////echo greeting("Md Zahid");
//
//function pyramid(int $size,bool $isRight = true): void
//{
//    if($isRight):
//        // drawing a pyramid
//        for ($row = 1; $row <= $size; $row++) {
//            // print spaces before start
//            for ($space = $size - $row; $space > 0; $space--){
//                echo "  ";
//            }
//
//            // print starts after spaces
//            for ($col = 1; $col <= (2 * $row - 1); $col++){
//                echo "* ";
//            }
//
//            echo "\n";
//        }
//    else:
//        // drawing a diamond
//        for ($row = $size -1; $row > 0; $row--) {
//            for ($space = 0; $space < $size - $row; $space++) {
//                echo "  ";
//            }
//
//            for ($col = 1; $col <= (2 * $row - 1); $col++){
//                echo "* ";
//            }
//
//            echo "\n";
//        }
//    endif;
//}
//
//
//function makeDiamond(int $size): void
//{
//    pyramid($size);
//    pyramid($size, false);
//}
//
//pyramid(10, false);
//makeDiamond(10);
//pyramid(10);
//
//
//$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
//
//print_r($array);
//
//$obj = (new stdClass);
//
//print_r($obj);







//$size = 12;

/*

 size = 4 * 2 = 8 - 1 = 7
 7 "*" 1 = 6 / 2 = 3

loop one will be generate 3 space
loop two will generate 1 start


      *
    * * *
  * * * * *
* * * * * * *




 size = 4
 */

// 3 part

// assignment
// condition
// iteration
// after response he will update state
// 4
// 1

//for ($i = 0; $i < 4; $i++){
//    echo "$i \n";
//}




//Drawing a pyramid
for($row = 1; $row <= $size; $row++){
    //Print spaces before start
    // 4 - 1 = 3
    for($space = $size - $row; $space > 0; $space--){
        echo "  ";
    }
    // Print starts after spaces
    // 1 * 2 = 2 - 1 = 1
    // 2 * 2 = 4 - 1 = 3
    for($col = 1; $col <= (2 * $row - 1); $col++){
        echo "* ";
    }
    echo "\n";
}