  <?php

$numbers = array(1, 2, 3, 4, 5);

function getRandomNumber() {
    $randomNumber = mt_rand(0, count($numbers) - 1);
    return $numbers[$randomNumber];
}

echo getRandomNumber();
?>