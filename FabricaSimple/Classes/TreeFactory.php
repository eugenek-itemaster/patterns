<?php
namespace FabricaSimple\Classes;

class TreeFactory
{
    public static function createTree(string $tree)
    {
        switch ($tree) {
            case 'vishnya': return new Vishnya();
            case 'yablonya': return new Yablonya();
            case 'oreh': return new Oreh();
            default: return new \stdClass();
        }
    }
}