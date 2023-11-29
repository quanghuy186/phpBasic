<?php
    namespace Models;

    class Product {
        private $name;
        private $price;

        public function __construct($name, $price) {
            $this->name = $name;
            $this->price = $price;
        }

        public function getName(){
            return $this->name;
        }

        public function setName(string $name){
            $this->name = $name;
        }

        public function getPrice(){
            return $this->price;
        }   
        
        public function setPrice(int $price){
            $this->price = $price;
        }   

        
    }   