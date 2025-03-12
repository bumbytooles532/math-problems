<?php
function getRandomMathProblem() {
    $operators = array("+", "-", "*", "/");
    $numbers = array(1, 2, 3, 4, 5);
    shuffle($operators);
    shuffle($numbers);
    return $numbers[0] . " " . $operators[0] . " " . $numbers[1];
}
