<?php
namespace FabricaSimple\Classes;

class Tree
{
    private $height;

    public function setHeight(int $height)
    {
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

}