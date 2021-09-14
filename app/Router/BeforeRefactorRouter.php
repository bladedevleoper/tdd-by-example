<?php

namespace App\Router;

class BeforeRefactorRouter
{
    public static array  $post = [];
    public static array $get = [];

    /**
     * Set Post routes
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public static function post(string $uri, string $controller)
    {
        self::$post[$uri] = $controller;
    }

    /**
     * Set Get routes
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public static function get(string $uri, string $controller)
    {
        self::$get[$uri] = $controller;
    }
}
