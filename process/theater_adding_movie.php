<?php

session_start();

include '../core/AppHelper.php';
include '../core/Database.php';
include '../core/Playing_movies.php';

$theater_id = $_SESSION['id'];
$movie_id = $_POST['movie'];
$show_time = $_POST['show_time'];


$res = Playing_movies::insert_playing_movies($movie_id, $theater_id, $show_time);

if ($res) {

    AppHelper::redirect('/index.php/theaters_owner?session=on');
}
else{
    echo $theater_id;
    echo "|";
    echo $movie_id;
    echo "|";
    echo $show_time;
}