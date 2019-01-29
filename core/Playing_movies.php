<?php
/**
 * Created by PhpStorm.
 * User: Inojan
 * Date: 1/22/2019
 * Time: 6:17 PM
 */

class Playing_movies
{
    public $id, $movie_id, $theater_id, $show_time;

    public static function select_all()
    {
        $pdo = Database::db();
        $sql = "SELECT * FROM playing_movies";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, Playing_movies::class);
        return $result;
    }

    public static function select_by_theater_id($theater_id)
    {

        $pdo = Database::db();
        $sql = "SELECT * FROM playing_movies WHERE theater_id = $theater_id  GROUP BY movie_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, Playing_movies::class);
        return $result;
    }

    public static function insert_playing_movies($movie_id, $theater_id, $show_time)
    {

        $pdo = Database::db();
        $sql = "INSERT INTO playing_movies (movie_id,theater_id,show_time) VALUES (?,?,?)";
        $stmt = $pdo->prepare($sql);
        $res = $stmt->execute([$movie_id, $theater_id, $show_time]);
        return $res;

    }


    public static function delete_show_time($id)
    {

        $pdo = Database::db();
        $sql = "DELETE FROM playing_movies WHERE id=$id";
        $stmt = $pdo->prepare($sql);
        $res = $stmt->execute();
        return $res;
    }


}

