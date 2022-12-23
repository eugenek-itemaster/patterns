<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Proxy\Classes\Wife;

$wife = new Wife();
$wife->doSomething([
    'Clean house',
    'MAke a cofee',
    'Clean windows'
]);
$wife->doSomething([
    'Prepare lunch',
    'Prepare dinner',
    'Go to rest'
]);