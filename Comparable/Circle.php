<?php
class Circle {
    function __construct(private string $name, private int $radius){

    }
    public function getRadius():int{
        return $this->radius;
    }
}