<?php
/**
 * Created by PhpStorm.
 * User: Inojan
 * Date: 1/13/2019
 * Time: 9:15 AM
 */

class Router
{

    private static $routes=[];

    public static function add($url,$controller,$function){
        self::$routes[] = [
          'url' => $url,
          'controller' => $controller,
          'functionName' => $function
        ];
    }


    public static function getRoutes(){
        return self::$routes;
    }

    public static function route($url){

        foreach (self::$routes as $route){
            if ($route['url'] == $url){

                call_user_func([$route['controller'],$route['functionName']] , $_REQUEST);
                return true;
            }
        }

        throw new Exception(include '../404.php');
    }
}