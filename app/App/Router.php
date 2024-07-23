<?php

namespace Root\PHP\MVC\App;

use DI\Container;

class Router
{
    private static array $routes = [];

    public static function add(string $method, string $path, array $handler, array $middlewares = []): void
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'handler' => $handler,
            'middleware' => $middlewares
        ];
    }

    public static function run(): void
    {
        $path = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        $container = new Container();

        foreach (self::$routes as $route) {
            $pattern = "#^" . $route['path'] . "$#";
            if (preg_match($pattern, $path, $variables) && $method == $route['method']) {

                // call middleware
                foreach ($route['middleware'] as $middleware) {
                    $container->get($middleware)->before();
                }
                array_shift($variables);
                $container->call($route['handler'], $variables);
                return;
            }
        }

        http_response_code(404);
    }
}
