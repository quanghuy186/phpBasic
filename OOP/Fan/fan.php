<?php

class Fan {
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;

    private $speed;
    private $on;
    private $radius;
    private $color;

    public function __construct() {
        $this->speed = self::SLOW;
        $this->on = false;
        $this->radius = 5.0;
        $this->color = "blue";
    }

    public function getSpeed() {
        return $this->speed;
    }

    public function setSpeed($speed) {
        $this->speed = $speed;
    }

    public function isOn() {
        return $this->on;
    }

    public function setOn($on) {
        $this->on = $on;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function toString() {
        if ($this->on) {
            return "Speed: " . $this->speed . ", Color: " . $this->color . ", Radius: " . $this->radius . " - fan is on";
        } else {
            return "Color: " . $this->color . ", Radius: " . $this->radius . " - fan is off";
        }
    }
}

// Sử dụng lớp Fan để tạo một đối tượng quạt và in thông tin của nó
$fan = new Fan();
echo $fan->toString() . "<br>";