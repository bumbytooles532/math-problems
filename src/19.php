<?php
// Generate a random number between 1 and 10
$randomNumber = rand(1, 10);

// If it's not prime, print "Not a prime"
if (!is_prime($randomNumber)) {
    echo "Not a prime";
} else {
    // If it's prime, print "Prime"
    echo "Prime";
}

function is_prime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
?>
