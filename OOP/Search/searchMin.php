<?php
    $nums = [-2, 0, 5, 7, 9, -5, 30, 100];

    function findMin($arr): int
    {
        $min = $arr[0];
        for ($i = 1; $i < count($arr); $i++) {
            if ($arr[$i] < $min) {
                $min = $arr[$i];
            }
        }
        return $min;
    }
    

    $minValue = findMin($nums);
    echo "</br>";
    echo "The minimum value is: " . $minValue;