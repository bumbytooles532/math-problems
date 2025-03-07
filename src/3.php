// Random math problem generation function
function getRandomMathProblem() {
    // Generate two random numbers between 1 and 10
    $num1 = rand(1, 10);
    $num2 = rand(1, 10);
    
    // Generate a random operator (+, -, x, /)
    $operator = rand(0, 3);
    
    // Create the math problem
    switch($operator) {
        case 0:
            return "$num1 + $num2";
            break;
        case 1:
            return "$num1 - $num2";
            break;
        case 2:
            return "$num1 x $num2";
            break;
        case 3:
            return "($num1 / $num2)";
            break;
    }
}
