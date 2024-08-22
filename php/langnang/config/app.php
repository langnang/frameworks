<?php


return [
    "name" => "",

    "version" => "",

    "core" => [
        'router' => \App\Core\Router::class,
        'filesystem' => \App\Core\FileSystem::class,
        'config' => \App\Core\Config::class,
        'env' => \App\Core\Env::class,
        'module' => \App\Core\Env::class,
        'request' => \App\Core\Request::class,
        'response' => \App\Core\Response::class,
        'var_dump' => \App\Core\VarDump::class,
        'view' => \App\Core\View::class,
    ],

    "supports" => [

    ],
];