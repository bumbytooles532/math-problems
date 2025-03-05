<?php 

// Create an array to store all the math problems
$math_problems = [];

// Add some math problems to the array
$math_problems[] = "5 + 3";
$math_problems[] = "12 - 7";
$math_problems[] = "8 x 4";
$math_problems[] = "16 / 4";

// Get a random math problem from the array
$random_problem = $math_problems[array_rand($math_problems)];

// Evaluate the random math problem and print the result
echo eval("return $random_problem;");
