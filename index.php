<?php

require_once __DIR__ . '/vendor/autoload.php';

use Builder\CarBuilder;
use Builder\Director;
use Builder\TruckBuilder;

$carBuilder   = new CarBuilder();
$truckBuilder = new TruckBuilder();

$director = new Director();
$car      = $director->build($carBuilder);
$truck    = $director->build($truckBuilder);

print_r([$car, $truck]);

