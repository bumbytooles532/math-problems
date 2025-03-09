<?php
function getRandomMathProblem() {
    $numbers = array(1, 2, 3, 4, 5);
    shuffle($numbers);
    $a = array_pop($numbers);
    $b = array_pop($numbers);
    $operation = array_pop($numbers);
    switch ($operation) {
        case '+':
            return "$a + $b";
            break;
        case '-':
            return "$a - $b";
            break;
        case 'x':
            return "$a x $b";
            break;
        default:
            return "$a / $b";
    }
}
?>