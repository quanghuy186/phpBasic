<?php 
 namespace Animal\Animals;
use Animal\Abstract\Animal;
use Animal\Interface\Edible;

class Chicken extends Animal implements Edible{
    
    public function makeSound(){
        return 'COOK COOK!';
    }   
    
    public function howToEat(){
        return 'Eat chicken';
    }   
}
?>