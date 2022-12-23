<?php
namespace Strategy\Classes;

class SendService
{
    public function __consruct()
    {
        die('SSS');
    }
    private $shippings = [];

    public function addShipping(ShippingInterface $shipping) {
        $this->shippings[] = $shipping;

        usort($this->shippings, function($shippingA, $shippingB) {
            return $shippingA->maxWeight() <=> $shippingB->maxWeight();
        });
    }

    public function send(string $package, int $weight) {
        foreach ($this->shippings as $shipping) {
            if ($shipping->maxWeight() <= $weight) {
                $shipping->send($package);
                break;
            }
        }
    }
}
