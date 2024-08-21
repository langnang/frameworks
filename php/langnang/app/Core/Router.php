<?php
namespace App\Core;
class Router
{
    public $maps = [];
    function run()
    {
        var_dump($_SERVER);
        $method = $_SERVER['REQUEST_METHOD'];
        var_dump($this->maps[$method]);
    }
    function group()
    {
    }
    function get($path, $method)
    {
        $this->maps['GET'][$path] = $method;
        var_dump(__METHOD__);
        var_dump(__FUNCTION__);
    }
    function post()
    {
    }
}