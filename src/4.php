<?php

function getRandomMathProblem() {
    $numbers = range(1, 10);
    shuffle($numbers);
    $num1 = array_pop($numbers);
    $num2 = array_pop($numbers);
    $operator = ['+', '-', '*', '/'][array_rand(['+', '-', '*', '/'], 1)];
    switch ($operator) {
        case '+':
            return $num1 + $num2;
            break;
        case '-':
            return $num1 - $num2;
            break;
        case '*':
            return $num1 * $num2;
            break;
        case '/':
            if ($num2 === 0) {
                return "Invalid Operation";
            } else {
                return $num1 / $num2;
            }
    }
}

?>
