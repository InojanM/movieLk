<?php

include '../core/AppHelper.php';
include '../core/Movie.php';
include '../core/Database.php';

$movie_name = $_POST['movie_name'];
$language = $_POST['language'];
$img_url = $_POST['img_url'];
$release_date = $_POST['release_date'];

$res = Movie::insert_movie($movie_name, $language, $img_url, $release_date);

if ($res) {
    AppHelper::redirect('/index.php/movies');
}