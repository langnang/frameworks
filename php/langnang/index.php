<?php


require_once __DIR__ . '/vendor/autoload.php';


$router = new \App\Core\Router;

var_dump($router);

$router->get('/', function () { });


$router->run();