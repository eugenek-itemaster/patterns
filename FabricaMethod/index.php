<?php
require_once __DIR__ . '/../vendor/autoload.php';

use FabricaMethod\Classes\GoalkeeperTeam;
use FabricaMethod\Classes\DefenderTeam;
use FabricaMethod\Classes\ForwardTeam;

$goalkeeperTeam = new GoalkeeperTeam();
$goalkeeper = $goalkeeperTeam->createPlayer();
$goalkeeper->position();

$defenderTeam = new DefenderTeam();
$defender = $defenderTeam->createPlayer();
$defender->position();

$forwardTeam = new ForwardTeam();
$forward = $forwardTeam->createPlayer();
$forward->position();