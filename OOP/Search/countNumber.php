<?php
    $numbers = [1,4,5,1,6,7,2,3,4,5,6,7,1,2,4,9,5,3,4,11,14,6];
    $input = 7;
    function countNumber($numbers, $input){
        $dem = 0;
        for($i = 0; $i < count($numbers); $i++){
            if($numbers[$i] == $input){
                $dem++;
            }
        }
        return $dem;
    }

    echo "So lan xuat hien cua ". $input . " la " . countNumber($numbers, $input);
?>