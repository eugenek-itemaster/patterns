<?php
namespace Decorator\Classes;

class ComputerForGames implements Computer
{
    private $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function getMemory()
    {
        return $this->computer->getMemory() * 2;
    }
}
