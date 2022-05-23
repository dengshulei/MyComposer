<?php

use App\Apple;

require "../vendor/autoload.php";

$object = new Apple();
echo $object->getProperty() . PHP_EOL;

