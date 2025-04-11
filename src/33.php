<?php
// Define a function to add two numbers
function sum($a, $b) {
    return $a + $b;
}

// Test the function with some data points
$numbers = [2, 3];
$result = sum($numbers[0], $numbers[1]);
echo "The sum of the numbers is: " . $result; // Expected output: The sum of the numbers is: 5

$evenNumbers = [4, 6, 8, 10];
$result = sum($evenNumbers[0], $evenNumbers[1]);
echo "The sum of the even numbers is: " . $result; // Expected output: The sum of the even numbers is: 12
?>
