<?php
/**
 * Created by PhpStorm.
 * User: srisa
 * Date: 1/14/2019
 * Time: 11:16 AM
 */

class AppHelper
{

    public static function getBaseURL()
    {

        return sprintf('%s://%s', $_SERVER['REQUEST_SCHEME'], $_SERVER['HTTP_HOST']);


    }

    public static function redirect($url)
    {
        return header('Location:' . self::getBaseURL() . $url);
    }

}