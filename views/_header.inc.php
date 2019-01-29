<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="<?= AppHelper::getBaseURL() ?>/style/myCss.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>



    <script src="<?= AppHelper::getBaseURL() ?>/js/helper_functions.js"></script>
    <title> Movie.lk</title>
</head>

<body style="background-image: url('<?= AppHelper::getBaseURL() ?>/movie.lk/imgs/b.jpg')">

<!-- Nav bar staring -->
<div class="container">

    <div class="container fixed-top" style="background-color: white;height: 70px">
        <div class="row">
            <div class="col">

                <a class="navbar-brand" href="#">
                    <img src="<?= AppHelper::getBaseURL() ?>/imgs/logo.png" alt="logo"
                         style="height: 70px ; margin-top: -20px">
                </a>

                <div class="text-right">

                    <?php if (!empty($_SESSION)) {

                        if (isset($_SESSION['user'])) { ?>
                            <h4><a href="<?= AppHelper::getBaseURL() ?>/process/logout.php">

                                    <button class="btn btn-danger navbar-btn" id="remove-border-redius">Logout</button>

                                </a></h4>

                            <?php

                        }
                        }

                        else{ ?>

                            <h4><a href="<?= AppHelper::getBaseURL() ?>/index.php/login">

                                    <button class="btn btn-danger navbar-btn" id="remove-border-redius">Login</button>

                                </a>
                                <a href="<?= AppHelper::getBaseURL() ?>/index.php/admin">

                                    <button class="btn btn-warning navbar-btn" id="remove-border-redius">Admin Page</button>

                                </a>

                            </h4>

                            <?php
                        }
                        ?>




                    </li></div>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="remove-border-redius">

                    <ul class="navbar-nav">
                        <li class="active">
                            <a class="nav-link active" href="<?= AppHelper::getBaseURL() ?>/index.php/home"><h3
                                        id="nav">HOME</h3></a>
                        </li>

                        <li>
                            <a class="nav-link" href="<?= AppHelper::getBaseURL() ?>/index.php/movies"><h3
                                        id="nav"> MOVIES</h3></a>
                        </li>
                        <li>
                            <a class="nav-link" href="<?= AppHelper::getBaseURL() ?>/index.php/theaters"><h3
                                        id="nav"> THEATERS</h3></a>
                        </li>

                    </ul>


                </nav>
            </div>

        </div>
    </div>
    <div style="margin-bottom: 170px"></div>
    <!--  End Nav bar-->

    <!--  Slide show -->



