<?php

include '../core/Database.php';
include '../core/Playing_movies.php';
include '../core/AppHelper.php';


if (!empty($_GET)) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
}

$res = Playing_movies::delete_show_time($id);

if ($res) {
    AppHelper::redirect('/index.php/theaters_owner?session=on');
} else {
    AppHelper::redirect('/404.php');
}

