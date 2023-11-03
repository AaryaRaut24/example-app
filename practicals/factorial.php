<?php
function factorial($n) {
    if ($n < 0) {
        // Handle negative input as an error
        return "Factorial is not defined for negative numbers";
    } elseif ($n == 0 || $n == 1) {
        // Base case: 0! and 1! are both 1
        return 1;
    } else {
        // Recursive case: Multiply $n by factorial of ($n-1)
        return $n * factorial($n - 1);
    }
}

// Example usage:
$number = 5;
$result = factorial($number);
echo "Factorial of $number is $result";
?>