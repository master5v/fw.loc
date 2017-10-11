<?php
namespace vendor\core;

class Router
{
    protected static $routes = [];
    protected static $route = [];

    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes()
    {
        return self::$routes;
    }

    public static function getRoute()
    {
        return self::$route;
    }

    public static function matchRoute($url)
    {
        foreach (self::$routes as $pattern => $route) {
            if (preg_match("#$pattern#i", $url, $matches)) {
//                debug($matches);
                foreach ($matches as $k => $v) {
                    if (is_string($k)) {
                        $route[$k] = $v;
                    }
                }
                if (!isset($route['action'])) {
                    $route['action'] = 'index';
                }
                self::$route = $route;
//                debug(self::$route);
                return true;
            }
        }
        return false;
    }

    public static function dispatch($url)
    {
        if (self::matchRoute($url)) {
            debug(self::$route);
            $controller = 'app\controllers\\' . self::upperCamelCase(self::$route['controller']);

            if (class_exists($controller)) {
                $obj = new $controller(self::$route);
                $action = self::lowerCamelCase(self::$route['action']).'Action';
                if (method_exists($obj, $action)) {
                    $obj->$action();
                } else {
                    http_response_code(404);
                    echo ' metod не найден';
                    include '404.html';
                }

            } else {
                http_response_code(404);
                echo ' класс не найден';
                include '404.html';
            }

        } else {
            http_response_code(404);
            include '404.html';

        }
    }

    public static function upperCamelCase($name)
    {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $name)));
    }

    public static function lowerCamelCase($name)
    {
        return lcfirst(str_replace(' ', '', ucwords(str_replace('-', ' ', $name))));
    }
}