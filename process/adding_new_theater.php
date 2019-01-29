<?php
include '../core/AppHelper.php';
include '../core/Theaters.php';
include '../core/Database.php';

$theater = $_POST['theater'];
$place = $_POST['place'];
$contact_number = $_POST['contact_number'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];

$theater_details = Theaters::insert_theater($theater, $place, $contact_number, $user_name, $password);


if ($theater_details) {

    AppHelper::redirect('/index.php/theaters');
}