<?php
/*PHP program to find the missing number/numbers from
 an array of 10 elements and display the missing number/numbers*/

$array = array(1, 2, 3, 6, 7);
$n = 10;
$missing_numbers = array();
for ($i = 1; $i <= $n; $i++) {
    if (!in_array($i, $array)) {
        array_push($missing_numbers, $i);
    }
}

if (count($missing_numbers) > 0) {
    echo "The missing numbers are: ";
    foreach ($missing_numbers as $num) {//iteration through the missing_numbers array
        echo $num . " ";
    }
} else {
    echo "No missing numbers";
}

?>
