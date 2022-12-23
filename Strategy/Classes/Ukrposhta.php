<?php
namespace Strategy\Classes;

class Ukrposhta implements ShippingInterface
{
    const MAX_WEIGHT = 10;

    public function send(string $package)
    {
        echo "{$package} - sent by Ukrposhta";
    }

    public function maxWeight(): int
    {
        return self::MAX_WEIGHT;
    }
}