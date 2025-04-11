<?php
function quickSort($arr) {
    if (count($arr) <= 1) {
        return $arr;
    } else {
        $pivot = $arr[0];
        $leftHalf = array_slice($arr, 1);
        $rightHalf = array_slice($arr, 1);

        return array_merge(quickSort($leftHalf), array($pivot), quickSort($rightHalf));
    }
}

// Example usage:
$numbers = [3, 6, 8, 5, 2, 9, 1];
$sortedNumbers = quickSort($numbers);
echo "Sorted numbers: " . implode(", ", $sortedNumbers) . "\n";
