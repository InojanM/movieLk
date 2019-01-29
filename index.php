<?php

if (!empty($_GET)){
    if (isset($_GET['session'])){
        if ($_GET['session']=='on'){
            session_start();
        }
    }
}

require_once 'core/Router.php';
require_once 'core/AppHelper.php';

require_once 'core/Database.php';
require_once 'core/Movie.php';
require_once 'core/Theaters.php';
require_once 'core/Playing_movies.php';

spl_autoload_register(function ($className) {

    $file = sprintf('controllers/%s.php', $className);
    if (file_exists($file)) {
        include $file;
    }
});

$url = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : "/";


include 'views/_header.inc.php';


Router::add('/', PageController::class, 'home');
Router::add('/home', PageController::class, 'home');
Router::add('/movies', PageController::class, 'movies');
Router::add('/theaters', PageController::class, 'theaters');
Router::add('/login', PageController::class, 'login');
Router::add('/theaters_owner', PageController::class, 'theaters_owner');
Router::add('/admin', PageController::class, 'admin_login');
Router::add('/admin_page', PageController::class, 'admin_page');


try {
    Router::route($url);
} catch (Exception $e) {
    include '404.php';
}

include 'views/_footer.inc.php';