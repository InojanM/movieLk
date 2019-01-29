<?php
/**
 * Created by PhpStorm.
 * User: Inojan
 * Date: 1/20/2019
 * Time: 7:34 AM
 */

//include 'Database.php';

class Theaters
{
    public $id, $theater_name, $place, $contact_number;


    public static function selectAll()
    {
        $pdo = Database::db();
        $sql = "SELECT * FROM theaters";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, Theaters::class);
        return $result;
    }


    public static function select_by_movieId($id)
    {

        $pdo = Database::db();
        $qsl = "SELECT theaters.id, theaters.theater_name ,theaters.place,theaters.contact_number, playing_movies.id, playing_movies.theater_id,playing_movies.movie_id ,playing_movies.show_time FROM playing_movies , theaters WHERE playing_movies.movie_id = $id AND playing_movies.theater_id=theaters.id GROUP BY playing_movies.theater_id";
        $stmt = $pdo->prepare($qsl);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_CLASS, Theaters::class);
        return $res;
    }


    public static function insert_theater($name, $place, $number, $user_name, $password)
    {

        $pdo = Database::db();

        $sql = "INSERT INTO theaters (theater_name,place,contact_number,user,password) VALUES (?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $res = $stmt->execute([$name, $place, $number, $user_name, $password]);

        return $res;


    }

    public static function selectAllTheatersOwner()
    {
        $pdo = Database::db();
        $sql = "SELECT * FROM theaters";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $theatersOwner = $stmt->fetchAll(PDO::FETCH_CLASS, Theaters::class);
        return $theatersOwner;
    }


}