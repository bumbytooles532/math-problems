<?php
function getRandomMathProblem() {
    $problems = [
        "1. What is the result of 5 + 3?",
        "2. Calculate 7 - 2 * 4.",
        "3. Find the missing number in the sequence: 8, 6, 4, ?, ?."
    ];
    
    return random_element($problems);
}
?>
