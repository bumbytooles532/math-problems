<?php
// Example PHP code for generating random data
function getRandomData($size) {
    $data = [];
    for ($i = 0; $i < $size; $i++) {
        $data[] = rand(1, 10);
    }
    return $data;
}

$randomData = getRandomData(5);
print_r($randomData);
