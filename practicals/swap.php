<?php
function swapNumbers($a, $b) {
    // Output the initial values of $a and $b
    echo "Before swapping: a = $a, b = $b\n";
    
    // Swap the values of $a and $b using a temporary variable
    $temp = $a;
    $a = $b;
    $b = $temp;

    // Output the swapped values of $a and $b
    echo "After swapping: a = $a, b = $b\n";
}

// Example usage
$a = 5;
$b = 10;
swapNumbers($a, $b);
?>

