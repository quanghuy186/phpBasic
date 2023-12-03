<?php

// Interface Colorable
interface Colorable {
    public function howToColor();
}

// Lớp Square triển khai Colorable
class Square implements Colorable {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function getArea() {
        return $this->side * $this->side;
    }

    public function howToColor() {
        echo "Color all four sides.\n";
    }
}

// Lớp khác không triển khai Colorable
class Circle {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * $this->radius * $this->radius;
    }
}

// Tạo mảng chứa các đối tượng hình học
$shapes = [
    new Circle(5), // Hình tròn không có phương thức howToColor()
    new Square(4), // Hình vuông có phương thức howToColor()
    new Circle(3), // Hình tròn không có phương thức howToColor()
];

// Duyệt qua mảng và hiển thị diện tích, gọi howToColor() nếu đối tượng triển khai Colorable
foreach ($shapes as $shape) {
    echo "Diện tích: " . $shape->getArea() . "\n";
    if ($shape instanceof Colorable) {
        $shape->howToColor();
    }
    echo "----------------\n";
}