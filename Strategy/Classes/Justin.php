<?php
namespace Strategy\Classes;

class Justin implements ShippingInterface
{
    const MAX_WEIGHT = 1;

    public function send(string $package)
    {
        echo "{$package} - sent by Justin";
    }

    public function maxWeight(): int
    {
        return self::MAX_WEIGHT;
    }
}