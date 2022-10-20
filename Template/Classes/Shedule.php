<?php
namespace Template\Classes;

abstract class Shedule
{
    public function __construct()
    {
        echo "Start week!<br>";
    }

    private function sunday()
    {
        echo "Family Day!<br>";
    }

    public function showWeek()
    {
        $this->monday();
        $this->tuesday();
        $this->wednesday();
        $this->thursday();
        $this->friday();
        $this->saturday();
        $this->sunday();
    }

    abstract protected function monday();
    abstract protected function tuesday();
    abstract protected function wednesday();
    abstract protected function thursday();
    abstract protected function friday();
    abstract protected function saturday();
}