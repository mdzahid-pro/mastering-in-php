<?php

$numbers = array(1,2,3,4,5,6,7,8,9,10);

$counter = 0;

while($counter < count($numbers)){

    if($numbers[$counter] == 5){
        echo "I am five";
        break;
    }

    echo $numbers[$counter] . PHP_EOL;

    $counter++;
}