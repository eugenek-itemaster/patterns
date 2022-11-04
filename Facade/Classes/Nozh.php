<?php
namespace Facade\Classes;

class Nozh
{
    private $products = ['Svekla', 'Luk', 'Morkov', 'Potato', 'Meal'];

    public function cutProducts()
    {
        foreach ($this->products as $product) {
            echo "Product {$product} cutted.<br>";
        }
    }
}