<?php
use App\app;

require dirname(__DIR__)."/app/autoloader.php";
\App\autoloader::register();

//VENDOR COMPOSER
include dirname(__DIR__)."/vendor/autoload.php";

$app = new app();

