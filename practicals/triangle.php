<?php
function printInvertedTriangle($rows) {
    for ($i = $rows; $i >= 1; $i--) {
        // Print leading spaces
        for ($j = $rows - $i; $j > 0; $j--) {
            echo " ";
        }
        
        // Print asterisks
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }
        
        // Move to the next line
        echo "\n";
    }
}

// Set the number of rows for the inverted triangle
$rows = 5;

// Call the function to print the inverted triangle
printInvertedTriangle($rows);
?>
