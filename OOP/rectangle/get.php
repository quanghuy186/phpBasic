<?php
    class hcn{
        private int $width;
        private int $height;    

        public function __construct(int $width, int $height){
            $this->width = $width;
            $this->height = $height;
        }   
        
        public function getWidth(){
            return $this->width;
        }   

        public function getHeight(){
            return $this->height;
        }   

        public function setWidth(int $width){
            $this->width = $width;
        }   

        public function setHeight(int $height){
            $this->height = $height;
        }   

        public function getArea(){
            return $this->width * $this->height;
        } 
        
        public function getPerimeter(){
            return 2 * ($this->width + $this->height);
        }   

        public function display(){
            echo "Width: $this->width<br>";
            echo "Height: $this->height<br>";
        }
    }
?>