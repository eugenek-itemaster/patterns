<?php
namespace Proxy\Classes;

class Wife implements FamilyInterface
{
    private $husband;

    private $jobs;

    public function __construct()
    {
        $this->husband = new Husband();
    }
    public function doSomething(array $jobs)
    {
        foreach ($jobs as $job) {
            $this->jobs[] = $job;
        }

        if ($this->checkMax()) {
            echo "I'm busy<br>";
            return;
        }

        if ($this->hasAccess()) {
            $this->husband->doSomething($jobs);
        }

        //some logging
    }

    private function hasAccess()
    {
        return true;
    }

    private function checkMax()
    {
        return count($this->jobs) > 4;
    }
}