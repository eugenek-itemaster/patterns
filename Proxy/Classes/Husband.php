<?php
namespace Proxy\Classes;

class Husband implements FamilyInterface
{

    public function doSomething(array $jobs)
    {
        echo "<pre>";
        print_r($jobs);
    }
}