<?php
namespace Facade\Classes;

class Plita
{
    private $products = ['Svekla', 'Luk', 'Morkov', 'Potato', 'Meal'];

    public function svaritProducts()
    {
        foreach ($this->products as $product) {
            echo "Product {$product} is added.<br>";
        }
    }
}
