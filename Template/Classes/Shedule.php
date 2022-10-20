<?php
namespace Template\Classes;

abstract class Shedule
{
    public function __construct()
    {
        echo "Start week!<br>";
    }

    public function sunday()
    {
        echo "Family Day!<br>";
    }

    abstract function monday();
    abstract function tuesday();
    abstract function wednesday();
    abstract function thursday();
    abstract function friday();
    abstract function saturday();
}