<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Builder\Classes\Laptop;

$laptop = new Laptop();
$laptop->diagonal('15.6')->cpu('Core i7')->memory('16Gb')->show();

echo "<br>";

$laptop->diagonal('17.6')->cpu('Core i5')->memory('16Gb')->show();

echo "<br>";

$laptop = new Laptop();
$laptop->memory('16Gb')->show();