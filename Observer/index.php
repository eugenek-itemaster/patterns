<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Observer\Classes\Match;
use Observer\Classes\Translation;

$translation = new Translation();

$match1 = new Match("Barcelona - Real Madrid");
$translation->add($match1);

$match2 = new Match("Ukraine - USA");
$translation->add($match2);

$translation->results();