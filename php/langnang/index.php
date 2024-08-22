<?php


require_once __DIR__ . '/vendor/autoload.php';

$app = new App\Core\Application();

require_once __DIR__ . '/app/helpers.php';

var_dump($app);
var_dump(app('router'));


require_once __DIR__ . '/routes/api.php';
require_once __DIR__ . '/routes/web.php';


// $router = new \App\Core\Router;

// var_dump($router);

// $router->get('/', function () { });


// $router->run();