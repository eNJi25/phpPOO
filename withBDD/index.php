<?php

use App\Routing\Router;

require_once('vendor/autoload.php');

$router = new Router($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

$data = $router->render();
$page = $data["page"];

require_once 'views/base.php';