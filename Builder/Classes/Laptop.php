<?php
namespace Builder\Classes;

class Laptop
{
    private $laptop;

    public function __construct()
    {
        $this->laptop = new \stdClass();
    }

    public function diagonal(string $diagonal)
    {
        $this->laptop->diagonal = $diagonal;
        return $this;
    }

    public function cpu(string $cpu)
    {
        $this->laptop->cpu = $cpu;
        return $this;
    }

    public function memory(string $memory)
    {
        $this->laptop->memory = $memory;
        return $this;
    }

    public function show(){
        echo "<pre>";
        print_R($this->laptop);
    }
}
