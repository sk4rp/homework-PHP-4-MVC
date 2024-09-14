<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
require 'vendor/autoload.php';

use App\Services\Router;

$router = new Router();
$router->handleRequest();
