<?php
namespace Facade\Classes;

class Shop
{
    private $products = ['Svekla', 'Luk', 'Morkov', 'Potato', 'Meal', 'Tomatos', 'Sault'];

    public function buyProducts()
    {
        foreach ($this->products as $product) {
            echo "Product {$product} shipped.<br>";
        }
    }
}