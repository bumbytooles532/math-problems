 <?php

    // Create an array to store all numbers
    $numbers = [];

    // Loop through and add 10 random numbers to the array
    for ($i = 0; $i < 10; $i++) {
        $numbers[] = rand(1, 10);
    }

    // Shuffle the array to randomize the order of the numbers
    shuffle($numbers);

    // Print out the sum of the first two numbers in the array
    echo $numbers[0] + $numbers[1];

?>