
<?php
// Generate a random number between 1 and 10
$randomNumber = rand(1, 10);

// Ask the user to guess the number
echo "Guess the number: ";
$guess = trim(fgets(STDIN));

// Check if the guess is correct
if ($guess === $randomNumber) {
    echo "Correct! The number was {$randomNumber}.\n";
} else {
    echo "Incorrect. The number was {$randomNumber}. Try again.\n";
}
?>