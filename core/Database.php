<?php
/**
 * Created by PhpStorm.
 * User: Inojan
 * Date: 1/16/2019
 * Time: 3:59 PM
 */

class Database
{
    public $id;
    public $user;
    public $user_name;
    public $password;

    public static function db()
    {

        $host = 'localhost';
        $dbName = 'movie_database';
        $userName = "root";
        $password = "";

        $db = "mysql:host=$host;dbname=$dbName";

        try {

            $pdo = new PDO($db, $userName, $password);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }

        return $pdo;
    }




}