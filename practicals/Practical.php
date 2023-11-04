<?php
// Define the Practical class
class Practical {
    
    /**
     * Static function to print "Hello, World!"
     */
    public static function printHello() {
        echo "Hello, World!";
    }

    /**
     * Static function to add two numbers and return the result
     *
     * @param int $a The first number
     * @param int $b The second number
     * @return int The sum of the two numbers
     */
    public static function add($a, $b) {
        if(!is_int($num1) || !is_int($num2))
        {
            throw new \InvalidArgumentException("Arguments must be integers");
        }
        return $a + $b;
    }

    /**
     * Static function to generate a Fibonacci sequence
     *
     * @param int $n The number of Fibonacci numbers to generate
     * @return array An array of the first 'n' Fibonacci numbers
     */
    public static function generateFibonacciSequence($n) {
        $fibonacci = array();

        if ($n >= 1) {
            $fibonacci[] = 0;
        }
        if ($n >= 2) {
            $fibonacci[] = 1;
        }

        for ($i = 2; $i < $n; $i++) {
            $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        return $fibonacci;
    }
}
?>
