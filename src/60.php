<?php
function calculateSquareRoot($number) {
    $squareRoot = sqrt($number);
    return $squareRoot;
}

$numbers = [16, 25, 49, 81];
$squares = array_map('calculateSquareRoot', $numbers);

print_r($squares);
