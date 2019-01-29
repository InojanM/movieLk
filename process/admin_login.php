<?php
include '../core/AppHelper.php';
include '../core/Admin.php';
include '../core/Database.php';


function check_admin($user_name, $password)
{
    $admin = Admin::selectAdmin();

    foreach ($admin as $ad) {
        if ($ad->user_name == $user_name) {
            if ($ad->password == $password) {
                return true;
            }
        }
    }
    return false;
}


if (!empty($_POST)) {
    if (isset($_POST['admin']) && isset($_POST['password'])) {
        $user_name = $_POST['admin'];
        $password = $_POST['password'];

        $result = check_admin($user_name, $password);
        if ($result != false) {

            AppHelper::redirect('/index.php/admin_page');

        } else {
            AppHelper::redirect('/index.php/admin');
        }

    }

}

