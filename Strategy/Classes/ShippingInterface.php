<?php
namespace Strategy\Classes;

interface ShippingInterface
{
    public function send(string $package);

    public function maxWeight(): int;
}
