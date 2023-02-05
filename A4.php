
<?php
//PHP program that counts the number of repetition of an element inside an array

function count_repetitions_of_all_elements($array) {
    $count_array = array_count_values($array);
    $repetition_counts = [];
    foreach ($count_array as $element => $count) {
        $repetition_counts[$element] = $count;
    }
    return $repetition_counts;
}

$array = [1,2,1,4,1,6,6];

$repetition_counts = count_repetitions_of_all_elements($array);

echo "The repetition counts of the elements in the array are: \n";
foreach ($repetition_counts as $element => $count) {
    if ($count > 1) {
        echo "$element repeated $count times\n";
    }
   
}

?>
