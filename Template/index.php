<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Template\Classes\EasyWeek;
use Template\Classes\HardWeek;

$easyWeek = new EasyWeek();
$easyWeek->showWeek();

$hardWeek = new HardWeek();
$hardWeek->showWeek();