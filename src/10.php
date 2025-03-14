
<?php

// Generate a random math problem
$operator = rand(0,1) ? "+" : "-";
$a = rand(1, 10);
$b = rand(1, 10);
$correctAnswer = $a + $b;
if ($operator == "+") {
    echo "$a + $b = ";
} else {
    echo "$a - $b = ";
}

// Get the user's answer
$userAnswer = readline();

// Check if the answer is correct
if ($userAnswer === (string) $correctAnswer) {
    echo "Correct!";
} else {
    echo "Incorrect. The correct answer is $correctAnswer.";
}

?>