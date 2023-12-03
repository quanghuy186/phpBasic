<?php

// Định nghĩa interface Resizeable
interface Resizeable {
    public function resize($percentage);
}

// Định nghĩa lớp Circle
class Circle implements Resizeable {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function resize($percentage) {
        $this->radius *= (1 + $percentage / 100);
    }

    public function getArea() {
        return pi() * $this->radius * $this->radius;
    }
}

// Định nghĩa lớp Rectangle
class Rectangle implements Resizeable {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function resize($percentage) {
        $this->width *= (1 + $percentage / 100);
        $this->height *= (1 + $percentage / 100);
    }

    public function getArea() {
        return $this->width * $this->height;
    }
}

// Định nghĩa lớp Square
class Square extends Rectangle {
    public function __construct($side) {
        parent::__construct($side, $side);
    }
}

// Tạo mảng chứa các hình và thực hiện tăng kích thước ngẫu nhiên từ 1-100
$soLuongHinh = 5;
$arrayHinh = [];

for ($i = 0; $i < $soLuongHinh; $i++) {
    // Tạo ngẫu nhiên hình tròn, hình chữ nhật hoặc hình vuông
    $randomShape = mt_rand(1, 3);

    switch ($randomShape) {
        case 1:
            // Hình tròn
            $radius = mt_rand(1, 10); // Bán kính từ 1 đến 10
            $hinh = new Circle($radius);
            break;
        case 2:
            // Hình chữ nhật
            $width = mt_rand(1, 10); // Chiều rộng từ 1 đến 10
            $height = mt_rand(1, 10); // Chiều cao từ 1 đến 10
            $hinh = new Rectangle($width, $height);
            break;
        case 3:
            // Hình vuông
            $side = mt_rand(1, 10); // Cạnh từ 1 đến 10
            $hinh = new Square($side);
            break;
        default:
            break;
    }

    // Tăng kích thước ngẫu nhiên từ 1-100
    $tyLeTang = mt_rand(1, 100);
    $hinh->resize($tyLeTang);

    // Hiển thị diện tích trước và sau khi tăng kích thước
    $dienTichTruoc = $hinh->getArea();
    $hinh->resize($tyLeTang);
    $dienTichSau = $hinh->getArea();

    echo "Hình $i: Diện tích trước: $dienTichTruoc, Diện tích sau: $dienTichSau\n";
}
?>