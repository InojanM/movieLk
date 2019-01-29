<?php
/**
 * Created by PhpStorm.
 * User: Inojan
 * Date: 1/13/2019
 * Time: 9:15 AM
 */

class PageController
{
    public static function home()
    {
        include 'views/home.php';
    }

    public static function movies()
    {
        include 'views/movies.php';
    }

    public static function theaters()
    {
        include 'views/theaters.php';
    }

    public static function login()
    {
        include 'views/login.php';
    }

    public static function theaters_owner()
    {
        include 'views/theaters_owner.php';
    }

    public static function admin_login()
    {
        include 'views/admin_login.php';
    }

    public static function admin_page()
    {
        include 'views/admin_page.php';
    }

}