<?php

class Practical
{
    /**
     * Prints "Hello, World!" to the console.
     */
    public static function printHello()
    {
        echo "Hello, World!" . PHP_EOL;
    }

    /**
     * Takes two numbers as arguments and returns their sum.
     *
     * @param int|float $num1 The first number.
     * @param int|float $num2 The second number.
     *
     * @return int|float The sum of $num1 and $num2.
     */
    public static function add($num1, $num2)
    {
        return $num1 + $num2;
    }

    /**
     * Takes an integer 'n' as an argument and returns an array of Fibonacci sequence containing 'n' integers.
     *
     * @param int $n The number of terms in the Fibonacci sequence.
     *
     * @return array The Fibonacci sequence array.
     */
    public static function generateFibonacciSequence($n)
    {
        $fibonacci = array(0, 1);

        for ($i = 2; $i < $n; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        return $fibonacci;
    }
}

// Example usage:

// Print "Hello, World!"
Practical::printHello();

// Add two numbers
$sum = Practical::add(5, 7);
echo "Sum: $sum" . PHP_EOL;

// Generate Fibonacci sequence with 8 terms
$fibonacciSequence = Practical::generateFibonacciSequence(8);
echo "Fibonacci Sequence: " . implode(', ', $fibonacciSequence) . PHP_EOL;
?>

