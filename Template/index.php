<?php
require_once __DIR__ . '/../vendor/autoload.php';

$easyWeek = new \Template\Classes\EasyWeek();
$easyWeek->showWeek();

$hardWeek = new \Template\Classes\HardWeek();
$hardWeek->showWeek();