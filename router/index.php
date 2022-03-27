<?php

class Router 
{
    private $handled = false;

    function __construct() {}

    public function get($route, $view)
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
            return false;
        }

        $uri = $_SERVER['REQUEST_URI'];
        $uri = explode('?', $uri);

        if ($uri[0] === $route) {
            $this->handled = true;
            return include_once (pages . $view);
        }
    }

    public function post($route, $view)
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return false;
        }

        $uri = $_SERVER['REQUEST_URI'];
        
        if ($uri === $route) {
            $this->handled = true;
            return include_once (pages . $view);
        }
    }

    function __destruct() 
    {
        if (!$this->handled) {
            return include_once(pages . '404.php');
        }
    }

}