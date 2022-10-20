<?php
namespace Decorator\Classes;

class ComputerForBusiness implements Computer
{
    private $memory = 8;

    public function getMemory()
    {
        return $this->memory;
    }
}