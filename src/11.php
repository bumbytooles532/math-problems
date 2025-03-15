<?php
// Get the current time
$time = date("H");

// Check if it's morning, afternoon or night
if($time < 12) {
    echo "Good Morning!";
} else if($time < 17) {
    echo "Good Afternoon!";
} else {
    echo "Good Evening!";
}
?>