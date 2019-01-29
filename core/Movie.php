<?php
/**
 * Created by PhpStorm.
 * User: Inojan
 * Date: 1/19/2019
 * Time: 4:35 PM
 */

//include 'Database.php';

class Movie
{

    public $id, $movie_name, $language, $release_date, $img_url;


    public static function select_top_movies()
    {

        $pdo = Database::db();
        $sql = "SELECT movie_name FROM movie WHERE release_date <= NOW()";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, Movie::class);
        return $result;
    }

    public static function select_current_movies()
    {

        $pdo = Database::db();
        $sql = "SELECT * FROM movie WHERE release_date <= NOW()";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, Movie::class);
        return $result;
    }

    public static function select_upcoming_movies()
    {

        $pdo = Database::db();
        $sql = "SELECT * FROM movie WHERE release_date > NOW()";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, Movie::class);
        return $result;
    }


    public static function select_movie_name_by_movie_id($id)
    {

        $pdo = Database::db();
        $sql = "SELECT movie_name,release_date FROM movie WHERE id = $id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, Movie::class);
        return $result;
    }

    public static function find_movie_show_time($movie_id, $theater_id)
    {

        $pdo = Database::db();
        $sql = "SELECT id,show_time FROM playing_movies WHERE movie_id = $movie_id AND theater_id = $theater_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, Movie::class);
        return $result;

    }

    public static function find_movie_img($movie_id)
    {

        $pdo = Database::db();

        $sql = "SELECT img_url FROM movie WHERE id = $movie_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetch();

        return $result;

    }

    public static function insert_movie($movie_name, $language, $img, $date)
    {

        $pdo = Database::db();
        $sql = "INSERT INTO movie (movie_name,lang,img_url,release_date) VALUES (?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute([$movie_name, $language, $img, $date]);
        return $result;
    }

    public static function select_movies()
    {
        $pdo = Database::db();
        $sql = "SELECT id,movie_name FROM movie";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_CLASS, Movie::class);
        return $res;
    }

    public static function find_movie_release_date($movie_id)
    {

        $pdo = Database::db();
        $sql = "SELECT release_date FROM movie WHERE id=$movie_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $res = $stmt->fetch();
        return $res;
    }


}