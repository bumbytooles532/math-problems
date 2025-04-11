<?php
    function isPrime($number) {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i * $i <= $number; $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }

    function sumOfDigits($number) {
        $sum = 0;
        while ($number > 0) {
            $digit = $number % 10;
            $sum += $digit;
            $number = (int) $number / 10;
        }
        return $sum;
    }

    function calculateAverage($numbers) {
        $average = 0;
        foreach ($numbers as $num) {
            if ($isPrime($num)) {
                $average += sumOfDigits($num);
            }
        }
        return $average / count($numbers);
    }

    $numbers = [2, 3, 5, 7, 11, 13];
    echo "The average of the prime numbers in the array is: " . calculateAverage($numbers);
?>
