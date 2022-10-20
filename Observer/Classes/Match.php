<?php
namespace Observer\Classes;

class Match
{
    private $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function updated(string $score)
    {
        echo "Match status {$this->title}: $score.<br>";
    }
}