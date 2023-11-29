<?php
namespace Services;
class ProductManager{
    public function __construct(private array $products = [])
    {
        
    }

    public function add($product):void{
        $this->products[] = $product;    
    }

    public function getProduct():array{
        return $this->products;
    }
}