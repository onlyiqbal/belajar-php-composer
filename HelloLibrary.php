<?php

use Iqbal\Belajar\Customer;

require_once __DIR__ . "/vendor/autoload.php";

$customer = new \Iqbal\Belajar\Customer("Iqbal");
echo $customer->sayHello() . PHP_EOL;
echo $customer->sayHello("Budi") . PHP_EOL;
