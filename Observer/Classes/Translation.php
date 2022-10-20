<?php
namespace Observer\Classes;

class Translation
{
    private $matches = [];

    public function add(Match $match)
    {
        $this->matches[] = $match;
    }

    public function results()
    {
        foreach ($this->matches as $match) {
            $match->updated("1:0");
        }
    }
}