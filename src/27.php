<?php
function sumOfSquares($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number * $number;
    }
    return $sum;
}

// Example usage:
$studentScores = [85, 92, 76, 88];
echo "The sum of squares for the scores is: " . sumOfSquares($studentScores);
?>
