<?php

// drawing square shape
$size = 5;

for ($row = 0; $row < $size; $row++) {
    for ($col = 0; $col < $size; $col++) {
        echo " * ";
    }

    echo "\n";
}

// drawing a right triangle
for ($row = 0; $row < $size; $row++) {
    for ($col =1; $col <= $row; $col++){
        echo "* ";
    }

    echo "\n";
}

echo "\n=========================== \n\n";

// drawing an inverted right triangle
for ($row = $size; $row > 0; $row--) {
    for ($col = 1; $col <= $row; $col++) {
        echo "* ";
    }

    echo "\n";
}


echo "\n=========================== \n\n";

// drawing a pyramid
for ($row = 1; $row <= $size; $row++) {
    // print spaces before start
    for ($space = $size - $row; $space > 0; $space--){
        echo "  ";
    }

    // print starts after spaces
    for ($col = 1; $col <= (2 * $row - 1); $col++){
        echo "* ";
    }

    echo "\n";
}


// drawing a diamond
for ($row = $size -1; $row > 0; $row--) {
    for ($space = 0; $space < $size - $row; $space++) {
        echo "  ";
    }

    for ($col = 1; $col <= (2 * $row - 1); $col++){
        echo "* ";
    }

    echo "\n";
}
