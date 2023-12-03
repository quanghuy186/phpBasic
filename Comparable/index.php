<?php
    include './Circle.php';
    include "./Comparable.php";
    include "./ComparableCircle.php";

$circleOne = new ComparableCircle('Circle One', 21);
$circleTwo = new ComparableCircle('Circle Two', 20);
$circleThree = new ComparableCircle('Circle Three', 21);
var_dump($circleTwo->compare($circleOne));