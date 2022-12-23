<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Strategy\Classes\SendService;
use Strategy\Classes\Novaposhta;
use Strategy\Classes\Ukrposhta;
use Strategy\Classes\Justin;

$sendService = new SendService();

$sendService->addShipping(new Novaposhta());
$sendService->addShipping(new Ukrposhta());
$sendService->addShipping(new Justin());

$sendService->send("Coca Cola Package", 10);