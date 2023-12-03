<?php
    class ComparableCircle extends Circle implements Comparable{

        public function compare($other){
            return $this->getRadius() <=> $other->getRadius();
        }
    }