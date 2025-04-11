<?php
// This is a randomly generated PHP code for educational purposes.
// It includes some basic arithmetic operations and user input validation.

// User inputs
$number1 = readline('Enter the first number: ');
$operation = readline('Enter the operation (add, subtract, multiply, divide): ');

// Perform the calculation based on the selected operation
if ($operation === 'subtract') {
    $result = $number1 - 5;
} elseif ($operation === 'multiply') {
    $result = $number1 * 3;
} else {
    echo "Invalid operation. Please choose from subtract, multiply, or divide.";
}

// Display the result
echo "Result: " . $result;
?>
