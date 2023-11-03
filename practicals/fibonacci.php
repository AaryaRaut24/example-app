<?php

/**
 * Generate the nth Fibonacci number.
 *
 * @param int $n The index of the Fibonacci number to generate.
 *
 * @return int The nth Fibonacci number.
 */
function fibonacci($n) {
    if ($n <= 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    }

    $prev = 0;
    $current = 1;

    for ($i = 2; $i <= $n; $i++) {
        $next = $prev + $current;
        $prev = $current;
        $current = $next;
    }

    return $current;
}

// Example usage:
$n = 10;
$result = fibonacci($n);
echo "The $n-th Fibonacci number is $result";
?>
