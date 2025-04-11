<?php
class MathProblems {
    function solveEquation($equation) {
        $parts = explode('=', $equation);
        list($numerator, $denominator) = $parts;

        if (!empty($numerator) && !empty($denominator)) {
            $numerator = fmod($numerator, 10); // convert to decimal
            $denominator = abs($denominator);

            if ($denominator == 0) {
                return "Error: Division by zero";
            }

            if ($numerator < 0 && $denominator < 0 || $numerator > 0 && $denominator < 0) {
                return "Error: Invalid solution";
            }
        } else {
            return "Error: Equation is missing numerator or denominator.";
        }
    }
}
