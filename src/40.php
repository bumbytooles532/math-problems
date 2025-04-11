<?php
// Problem 1: Sum of first n natural numbers
function sumNaturalNumbers($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}

// Problem 2: Greatest common divisor (GCD)
function gcd($a, $b) {
    while ($b != 0) {
        $temp = $a % $b;
        if ($temp == 0) {
            break;
        } else {
            $a = $b;
            $b = $temp;
        }
    }
    return $a;
}

// Problem 3: Factorial of a number
function factorial($number) {
    $factorial = 1;
    for ($i = 2; $i <= $number; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}
