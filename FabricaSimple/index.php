<?php
require_once __DIR__ . '/../vendor/autoload.php';

use FabricaSimple\Classes\TreeFactory;

$vishnya = TreeFactory::createTree('vishnya');
echo get_class($vishnya)."<br>";

$oreh = TreeFactory::createTree('oreh');
echo get_class($vishnya)."<br>";

$yablonya = TreeFactory::createTree('yablonya');
echo get_class($yablonya)."<br>";

$persik = TreeFactory::createTree('persik');
echo get_class($persik)."<br>";
