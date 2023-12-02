<?php
include "./Abstract/Animal.php";
include "./Abstract/Fruit.php";
include "./Interface/Edible.php";
include "./Animals/Chiken.php";
include "./Animals/Tiger.php";
include "./Abstract/Fruits/Apple.php";
include "./Abstract/Fruits/Orange.php";

use Animal\Abstract\Fruits\Apple;
use Animal\Animals\Chicken;
use Animal\Animals\Tiger;
use Animal\Abstract\Fruits\Orange;

echo('---- Animals ------</br>');

$animals[] = new Tiger();
$animals[] = new Chicken();

foreach ($animals as $animal) {
    echo $animal->makeSound();

    if (is_a($animal, 'Interface\Edible')) {
        echo " " . $animal->howToEat() . '</br>';
    } else {
        echo "</br>";
    }
}

echo('---- Fruits ------</br>');

$fruits[] = new Apple();
$fruits[] = new Orange();

foreach ($fruits as $fruit) {
    echo $fruit->howToEat() . '</br>';
}