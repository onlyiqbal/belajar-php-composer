<?php
require_once __DIR__ . "/vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger("IqbalMaulanaMenggala");
$log->pushHandler(new StreamHandler("Application.log", Logger::WARNING));

$log->warning("Hello World");
$log->warning("Selamat Belajar Composer");
