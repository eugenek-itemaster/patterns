<?php
require_once __DIR__ . '/../vendor/autoload.php';

$easyWeek = new \Template\Classes\EasyWeek();
$easyWeek->monday();
$easyWeek->sunday();

$hardWeek = new \Template\Classes\HardWeek();
$hardWeek->monday();
$hardWeek->sunday();