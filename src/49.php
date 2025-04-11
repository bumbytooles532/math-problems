<?php
// Problem 1: Addition and Subtraction Practice
echo "1 + 2 = " . 3; // 1 + 2 = 3

// Problem 2: Division with Integer Arguments
if ($numerator < denominator) {
    echo "Cannot divide $numerator by $denominator.";
} else {
    $result = $numerator / $denominator;
    echo "The result is: " . $result;
}

// Problem 3: Prime Factorization of a Number
function primeFactors($number) {
    if ($number % 2 == 0) {
        return [2, floor($number / 2)];
    }
    $factors = [];
    for ($i = 3; $i <= sqrt($number); $i += 2) {
        while ($number % $i == 0 && is_int($number)) {
            array_push($factors, $i);
            $number /= $i;
        }
    }
    if ($number > 1) {
        array_push($factors, $number);
    }
    return $factors;
}

// Problem 4: Sum of Digits in a Number
function sumDigits($number) {
    $sum = 0;
    while ($number != 0) {
        $sum += $number % 10;
        $number /= 10;
    }
    return $sum;
}
