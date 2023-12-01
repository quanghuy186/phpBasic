<?php
class Shape{
    public function __construct(public string $name)
    {

    }

    public function show(){
        return "I am is $this->name";
    }
}

class Rectangle extends Shape{
    private int $width;
    private int $height;

    public function __construct($name, $width, $height)
    {
        $this->name = $name;
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(){
        return $this->width * $this->height;
    }

    public function calculatePerimeter(){
        return ($this->height + $this->width)/2;
    }
}