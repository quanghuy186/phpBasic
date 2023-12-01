<?php
class Point2D{
    public float $x;
    public float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    
    public function getX(){
        return $this->x;
    }

    public function setX($x){
        $this->x = $x;
    }   
    
    public function getY(){
        return $this->y;
    }

    public function setY($y){
        $this->y = $y;
    }   

    public function getXY(){
        return "{$this->x}, {$this->y}";    
    }

    public function setXY($x, $y){
        $this->x = $x;
        $this->y = $y;
    }   

    public function toString(){
        echo "This is point 2d";
    }
}

class Point3D extends Point2D{
    private float $z;
    
    public function __construct(float $x, float $y, float $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }   

    public function getZ(){
        return $this->z;
    }
    
    public function setZ($z){
        $this->z = $z;
    }   
    
    public function getXYZ(){
        return "{$this->x}, {$this->y}, {$this->z}";
    }
    
    public function setXYZ($x, $y, $z){
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function toString(){
        echo "This is Point 3d <br> ";
    }
}

$point3d = new Point3d(1,2,3);
echo $point3d->getXYZ() . " " . $point3d->toString();