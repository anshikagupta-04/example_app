<?php
function printInvertedTriangle($height) {
    for ($i = $height; $i >= 1; $i--) {
        // Print leading spaces
        for ($j = $height - $i; $j > 0; $j--) {
            echo " ";
        }

        // Print stars
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }

        // Move to the next line
        echo PHP_EOL;
    }
}

// Replace 5 with the height of the inverted triangle
$triangleHeight = 5;

printInvertedTriangle($triangleHeight);
?>

