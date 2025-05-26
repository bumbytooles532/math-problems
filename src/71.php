<?php
// Generate random numbers between 1 and 1000

for ($i = 0; $i < 5; $i++) {
    $randomNumber = rand(1, 1000);
    echo "The random number is: " . $randomNumber . "\n";
}

// Display the top 3 highest numbers
echo "The three highest numbers are:\n";
for ($i = 0; $i < 3; $i++) {
    $topThreeNumbers = [];
    for ($j = 0; $j < 10; $j++) {
        $randomNumber = rand(1, 1000);
        if (!in_array($randomNumber, $topThreeNumbers)) {
            array_push($topThreeNumbers, $randomNumber);
        }
    }
    sort($topThreeNumbers);
    echo "Top three numbers: ";
    foreach ($topThreeNumbers as $value) {
        echo $value . " ";
    }
    echo "\n";
}
?>
