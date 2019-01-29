<?php

session_start();

include '../core/AppHelper.php';
include '../core/Theaters.php';
include '../core/Database.php';

function check_userName_password($userName, $password)
{

    $owners = Theaters::selectAllTheatersOwner();
    foreach ($owners as $owner) {

        if ($owner->user == $userName) {
            if ($owner->password == $password) {
                $_SESSION['id'] = $owner->id;
                $_SESSION['user'] = $owner->theater_name;
                return true;
            }
        }
    }
    return false;
}


if (!empty($_POST)) {
    if (isset($_POST['user_name']) && isset($_POST['password'])) {
        $userName = $_POST['user_name'];
        $password = $_POST['password'];

        $result = check_userName_password($userName, $password);

        if ($result != false) {

            AppHelper::redirect('/index.php/theaters_owner?session=on');

        } else {
            AppHelper::redirect('/index.php/login');
        }
    }
}



