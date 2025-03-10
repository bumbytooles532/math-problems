<?php
function getRandomMathProblem() {
    $numbers = [1, 2, 3, 4, 5];
    $operators = ['+', '-', '*', '/'];
    $problem = '';
    for ($i = 0; $i < 3; $i++) {
        $number1 = $numbers[array_rand($numbers)];
        $number2 = $numbers[array_rand($numbers)];
        $operator = $operators[array_rand($operators)];
        if ($operator === '/') {
            // Make sure the divisor is not zero
            while (true) {
                $divisor = $numbers[array_rand($numbers)];
                if ($divisor !== 0) {
                    break;
                }
            }
        } else {
            $divisor = null;
        }
        $problem .= "{$number1} {$operator} {$number2}";
        if ($divisor !== null) {
            $problem .= "/{$divisor}";
        }
        $problem .= '=';
    }
    return $problem;
}
?>