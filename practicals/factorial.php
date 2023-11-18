<?php
function calculateFactorial($number) {
    if ($number < 0) {
        return "Factorial is not defined for negative numbers.";
    } elseif ($number == 0 || $number == 1) {
        return 1;
    } else {
        return $number * calculateFactorial($number - 1);
    }
}

// Replace 5 with the number for which you want to calculate the factorial
$numberToCalculate = 5;

$factorialResult = calculateFactorial($numberToCalculate);

echo "Factorial of $numberToCalculate is: $factorialResult";
?>

