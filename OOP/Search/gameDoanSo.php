<?php

function doanSo($soNghi, $min = 1, $max = 100) {
    $guess = floor(($min + $max) / 2); // Đoán số ở giữa khoảng min và max

    echo "Máy tính đoán: $guess <br>";

    if ($guess == $soNghi) {
        echo "Chính xác, đó là con số bạn đã nghĩ: $guess";
        // return;
    } elseif ($guess < $soNghi) {
        echo "Không, con số bạn nghĩ lớn hơn $guess <br>";
        doanSo($soNghi, $guess + 1, $max); // Tìm trong nửa lớn hơn của khoảng
    } else {
        echo "Không, con số bạn nghĩ nhỏ hơn $guess <br>";
        doanSo($soNghi, $min, $guess - 1); // Tìm trong nửa nhỏ hơn của khoảng
    }
}

// Sử dụng hàm doanSo để đoán số người chơi nghĩ (ở đây ví dụ số 74)
$soNghi = 73;
doanSo($soNghi);

?>