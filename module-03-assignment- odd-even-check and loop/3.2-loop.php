<?php

//Easy Process
// $sum = 0;
//     for($i=1; $i<=100; $i++){
//         $sum +=$i;
//     }

// echo "The sum of the series 1 + 2 + 3 + ... + 100 is: $sum";

// Dynamic Process:
$start_number = 1;
$end_number = 100;
$stapping = 1;

$summation = 0;
for ($i = $start_number; $i <= $end_number; $i += $stapping) {
    $summation += $i;

}
echo "The sum of the series 1 + 2 + 3 + ... + 100 is: $summation";