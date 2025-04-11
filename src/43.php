<?php
// This PHP code is designed to calculate and display some basic mathematical operations.
// It includes functions for addition, subtraction, multiplication, division, and modulus.

function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b != 0) {
        return $a / $b;
    } else {
        echo "Cannot divide by zero.";
        exit(1);
    }
}

function modulus($a, $b) {
    return $a % $b;
}

// Example usage:
$add_result = add(3, 5);
$subtract_result = subtract(8, 4);
$multiply_result = multiply(7, 2);
$divide_result = divide(10, 2);
$modulus_result = modulus(16, 3);

echo "Addition: " . $add_result . "\n";
echo "Subtraction: " . $subtract_result . "\n";
echo "Multiplication: " . $multiply_result . "\n";
echo "Division: " . $divide_result . "\n";
echo "Modulus: " . $modulus_result . "\n";

// Example of checking the correctness
function check($a, $b, $expected) {
    $result = add($a, $b);
    if ($result == $expected) {
        echo "Test passed for a = $a and b = $b.\n";
    } else {
        echo "Test failed for a = $a and b = $b. Expected: $expected but got: $result.\n";
    }
}

// Example input data
$check($add_result, 3, 5);
$check($subtract_result, 8, 4);
$check($multiply_result, 7, 2);
$check($divide_result, 10, 2);
$check($modulus_result, 16, 3);
