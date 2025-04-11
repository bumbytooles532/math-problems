<?php
// Code generation for Math-Problems Problem 367: The Nine Knights

function isSymmetric($nums) {
    // Check if the array has odd length and all elements are equal
    if (count($nums) % 2 != 0 || $nums[0] !== $nums[count($nums) - 1]) return false;
    // Sort the array to check for symmetry
    sort($nums);
    return $nums === array_reverse($nums);
}

function calculateAverageOfSquares() {
    $sum = 0;
    for ($i = 0; $i < 5; $i++) {
        $num = $i + 1;
        if (isSymmetric($numbers)) {
            $sum += pow($num, 2);
        }
    }
    return $sum / 4.5;
}

$numbers = [3, 8, 7, 10, 6];
echo "The sum of the squares is: " . calculateAverageOfSquares() . "\n";
?>
