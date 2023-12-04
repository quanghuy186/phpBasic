<?php
class Person{
    public $name;
    public $age;
    public $address;

    public function __construct($name, $age, $address){
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }
}

class Model{
    public function listPerson(){
        return [
            0 => new Person('John', 25, 'New York'),
            1 => new Person('Jane', 26, 'New York'),
            2 => new Person('John', 27, 'New York'),
        ];
    }
}