<?php

// creating dynamic pyramid
$size = 5;
for ($row = 1; $row <= $size; $row++){
    // print space before star
    for ($space = $size - $row; $space > 0; $space--){
        echo "&nbsp;&nbsp;&nbsp;";
    }

    for ($shape = 1; $shape <= (2 * $row - 1); $shape++){
        echo "*&nbsp;";
    }

    echo "<br>";
}

//$size = 5;
//for($i = 1;$i <= $size ;$i++){
//    for($j = 1;$j <= $size - $i;$j++){
//        echo '&nbsp&nbsp&nbsp';
//    }
//    for($k = 0;$k <= $size - $j ; $k++){
//        echo '*&nbsp&nbsp&nbsp&nbsp';
//    }
//    echo "<br>";
//}