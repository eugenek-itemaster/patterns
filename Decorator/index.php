<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Decorator\Classes\ComputerForBusiness;
use Decorator\Classes\ComputerForGames;

$computer = new ComputerForBusiness();
echo $computer->getMemory() . " GB<br>";

$modernComputer = new ComputerForGames($computer);
echo $modernComputer->getMemory() . " GB<br>";