<?php

namespace App\Core;
class Application
{
    private $core = [];

    function __construct()
    {
        var_dump(__METHOD__);
        $cfg = require_once __DIR__ . '/../../config/app.php';
        var_dump($cfg);

        // load core modules
        foreach ($cfg['core'] as $alias => $core) {
            if (is_int($alias))
                $alias = $core;

            $this->core[$alias] = new $core;
        }
        // load helpers
        foreach ($cfg['supports'] as $support) {
            require_once $support;
        }

    }
    function singleton()
    {
    }
}
