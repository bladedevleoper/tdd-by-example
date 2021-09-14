<?php

namespace App\Router;

use Exception;

class Router
{
    
    public static array $routes = [
        'post' => [],
        'get' => [],
    ];

    public static function __callStatic($name,$arguments)
    {      
        if (key_exists($arguments[0], self::$routes[$name])) {
            throw new Exception("Route {$arguments[0]} already exists in {$name}");
        }

        static::$routes[$name][$arguments[0]] = $arguments[1];
    }

    public static function find(string $route, string $uri)
    {
        if (!key_exists($uri, self::$routes[$route])) {
            throw new Exception("Url not found in the following route $route");
        }
        
        return self::format(self::$routes[$route][$uri], $uri);
    }

    private static function format(array $route, $uri)
    {
        return (object) [
            'uri' => $uri,
            'controller' => $route[0],
            'method' => $route[1]
        ];
    }
}
