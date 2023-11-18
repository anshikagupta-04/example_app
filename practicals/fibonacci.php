<?php
function generateFibonacci($terms) {
    $fibonacci = array(0, 1);

    for ($i = 2; $i < $terms; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

// Number of terms you want in the Fibonacci sequence
$numberOfTerms = 10;

$fibonacciSequence = generateFibonacci($numberOfTerms);

echo "Fibonacci sequence with $numberOfTerms terms: " . implode(', ', $fibonacciSequence);
?>

