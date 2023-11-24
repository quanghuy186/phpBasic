<?php
include './stopWatch.php';

function selectionSort($arr) {
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }
        $temp = $arr[$minIndex];
        $arr[$minIndex] = $arr[$i];
        $arr[$i] = $temp;
    }

    return $arr;
}

$stopwatch = new StopWatch();

$arrayToSort = [];
for ($i = 0; $i < 10000; $i++) {
    $arrayToSort[] = 10000 - $i; // Filling the array in reverse order
}

$stopwatch->start();
$arrayToSort = selectionSort($arrayToSort);
$stopwatch->stop();

echo "Elapsed time in milliseconds: " . $stopwatch->getElapsedTime();