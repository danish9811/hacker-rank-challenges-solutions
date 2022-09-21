<?php

// sock pars challenge solved 

$arr = [1, 2, 2, 2, 3, 3, 3, 3, 3, 4, 4, 4, 1, 1, 1, 1];

$newArray = array_count_values($arr);

$pairCounter = [];
foreach ($newArray as $item) {
    if ($item >= 2 && $item % 2 == 1) {
        $item = $item - 1;
        $pairCounter[] = $item / 2;
    } elseif ($item % 2 == 0) {
        $pairCounter[] = $item / 2;
    }
}

echo array_sum($pairCounter);
sort($newArray);
print_r(array_count_values($newArray));

// process finished with exit code 0

function sockMerchant($n, $ar) {
    $n = readline('how many numbers you want to enter ');
    for ($i = 0; $i < $n; $i++) {
        $ar[0] = readline('enter number at index [' . $i . '] : ');
    }
    $newArray = array_count_values($ar);

    $pairCounter = [];
    foreach ($newArray as $item) {
        if ($item >= 2 && $item % 2 == 1) {
            $item = $item - 1;
            $pairCounter[] = $item / 2;
        } elseif ($item % 2 == 0) {
            $pairCounter[] = $item / 2;
        }
    }

    return array_sum($pairCounter);
}