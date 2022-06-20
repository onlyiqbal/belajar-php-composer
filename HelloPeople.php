<?php
require_once __DIR__ . "/vendor/autoload.php";

use Iqbal\Data\People;

$people = new People("Iqbal");
echo $people->sayHello("Budi");
