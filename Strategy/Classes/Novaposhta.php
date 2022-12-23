<?php
namespace Strategy\Classes;

class Novaposhta implements ShippingInterface
{
    const MAX_WEIGHT = 100;

    public function send(string $package)
    {
        echo "{$package} - sent by Novaposhta";
    }

    public function maxWeight(): int
    {
        return self::MAX_WEIGHT;
    }
}