<?php
$rows = 5; // Adjust the number of rows as needed

for ($i = $rows; $i >= 1; $i--) {
    for ($j = $rows - $i; $j > 0; $j--) {
        echo " "; // Print spaces
    }

    for ($k = 1; $k <= 2 * $i - 1; $k++) {
        echo "*"; // Print asterisks
    }

    echo "\n"; // Move to the next line
}
?>
