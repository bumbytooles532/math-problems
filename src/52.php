<?php
function solveMathProblem($mathProblem) {
    $data = json_decode(file_get_contents('https://api.math-problems.com/data'), true);
    $result = array_replace_recursive($data, ['solution' => $mathProblem]);
    return $result;
}
?>
