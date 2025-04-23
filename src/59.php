<?php
// This is an example PHP code to solve some math problems.
// Feel free to modify and use it as needed!

$number1 = 5;
$number2 = 3;

// Addition
echo "The sum of $number1 and $number2 is: " . ($number1 + $number2) . "<br>";

// Subtraction
echo "The difference between $number1 and $number2 is: " . ($number1 - $number2) . "<br>";

// Multiplication
echo "The product of $number1 and $number2 is: " . ($number1 * $number2) . "<br>";

// Division
if ($number2 != 0) {
    echo "The quotient of $number1 divided by $number2 is: " . ($number1 / $number2) . "<br>";
} else {
    echo "Error! Division by zero is not allowed.";
}
?>
