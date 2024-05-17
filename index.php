<?php

$numbers = array(1,2,3,4,5,6,7,8,9,10);

//echo $numbers[0] . "\n";
//echo $numbers[1] . "\n";
//echo $numbers[2] . "\n";
//echo $numbers[3] . "\n";
//echo $numbers[4] . "\n";
//echo $numbers[5] . "\n";
//echo $numbers[6] . "\n";
//echo $numbers[7] . "\n";
//echo $numbers[8] . "\n";
//echo $numbers[9] . "\n";

$counter = 0;

// while
//while(false){
//    echo "While loop is runnign.";
//}

//$index = 0;
//while($counter < count($numbers)){
//
//    if($numbers[$counter] % 2 == 0){
//        echo $numbers[$counter] . "\n";
//    }
//
//    $counter++;
//}
// do while
//do{
//
//    echo "Loop is run";
//
//
//    if($numbers[$counter] % 2 == 0){
//        echo $numbers[$counter] . "\n";
//    }
//
//    $counter++;
//} while(false);
// for

//for ($i = 0; $i < count($numbers); $i++){
//    if($numbers[$i] % 2 == 0){
//        echo $numbers[$i] . "\n";
//    }
//}

// foreach
//foreach ($numbers as $key => $value) {
//    echo $key . ' => ' . $value . "\n";
//    if($value % 2 == 0){
//        echo $value . "\n";
//    }
//}

// break and continue
foreach ($numbers as $key => $number) {
    if($key == 9){
        echo "I have found this {$key} number.\n";

        break;
    }

    if($key == 4){
        echo "hey i'm skipping this iteration. \n" ;
        continue 1;
    }

    echo $key . "\n parent loop \n";

    foreach ($numbers as $s_key => $s_number) {
        if($s_key == 4){
            continue 2;
        }

        echo $s_number . ", ";
        if($s_key == 3){
            echo "\n";
        }
    }

    echo "\n parent loop end \n";
}