<?php
class Quadratic {
    private $a;
    private $b;
    private $c;
    
    public function __construct(int $a, int $b, int $c){
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
    }
    
    public function getA(){
    return $this->a;
    }
    
    public function getB(){
    return $this->b;
    }
    
    public function getDiscriminant(){
    return $this->getB()**2 - 4 * $this->c * $this->getA();
    }
    
    public function getRoot1(){
        return -($this->getB() + $this->getDiscriminant()) / 2*$this->getA();
    }

    public function getRoot2(){
        return -($this->getB() - $this->getDiscriminant()) / 2*$this->getA();
    }   
 
}
        
$x = new Quadratic(3, -4, -5);
if($x->getDiscriminant() > 0){
    echo "x1 = ".  $x->getRoot1()."<br>"; 
    echo "x2 = ". $x->getRoot2();
}else if($x->getDiscriminant() < 0){
    echo "The equation has no roots";
}
      
            