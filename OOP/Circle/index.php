<?php
class Circle{
    private $radius;
    private $color;
    
    public function getRadius(){
        return $this->radius;   
    }

    public function setRadius($radius){
        $this->radius = $radius;
    }   

    public function getColor(){
        return $this->color;
    }   

    public function setColor($color){
        $this->color = $color;
    }   
    
    public function show(){
        return "I am is $this->radius";
    }      

    public function calculateArea(){
        return 3.14 * $this->radius * $this->radius;
    }   
}

class Cylinder extends Circle {
    private $height;

    public function getHeight(){
        return $this->height;
    }   

    public function setHeight($height){
        $this->height = $height;
    }   

    public function thetich(){
        return $this->calculateArea()*1/3*$this->getHeight();
    }
}

// $circle = new Circle(); 
// $circle->setRadius(10);
// $circle->setColor("red");   
// $circle->show();
$cylinder = new Cylinder();
$cylinder->setRadius(1);
$cylinder->setHeight(1);
echo $cylinder->thetich();