<?php
    namespace Animal\Animals;

    use Animal\Abstract\Animal;
    
    class Tiger extends Animal{
        public function makeSound(){
            return 'ROAR!';
        }   
    }
?>