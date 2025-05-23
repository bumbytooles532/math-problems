<?php
// Problem 1: Sum of natural numbers up to n (n must be greater than or equal to 0)
function sumNaturalNumbers($n) {
    if ($n <= 0) {
        throw new Exception("Input must be a positive integer.");
    }
    return ($n * ($n + 1)) / 2;
}

// Problem 2: Check if a number is even
function isEven($num) {
    return $num % 2 == 0;
}

// Problem 3: Calculate the volume of a sphere given its radius (pi r^2)
function calculateSphereVolume($radius) {
    return M_PI * pow($radius, 2);
}
