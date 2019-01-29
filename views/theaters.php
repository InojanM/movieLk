<div class="row" style="margin-top: 170px ">
    <div class="col-sm-3">

        <div style="margin-top: 20px">
            <form>
                <div class="input-group">
                    <input type="text" class="form-control" id="remove-border-redius" placeholder="Search For Theaters">
                    <div class="input-group-btn">
                        <button class="btn btn-default" id="remove-border-redius" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <h4 style="margin-top: 20px"> Filter By</h4>
        <hr>
        <h3> LOCATION </h3>
        <form action="" method="postt">
            <input type="checkbox" name=""> Batticaloa <br>
            <input type="checkbox" name=""> Colombo <br>
            <input type="checkbox" name=""> Jaffna <br>
            <input type="checkbox" name=""> Trincomalee <br>
            <input type="checkbox" name=""> Jala <br>
            <input type="checkbox" name=""> Nuwaraliya <br>
            <input type="checkbox" name=""> Hatton <br>
        </form>

        <hr>


    </div>


    <div class="col-sm-9 ">

        <h1 class="text-center" style="margin-bottom: 20px"> Theaters</h1>


        <?php


        if (!empty($_GET)) {
            if (isset($_GET['id'])) {
                $theaters = Theaters::select_by_movieId($_GET['id']);
            }
        } else {
            $theaters = Theaters::selectAll();

        }

        foreach ($theaters as $t):
            $id = $t->id;

            if (!empty($_GET)) {
                if (isset($_GET['id'])) {
                    $movies = Playing_movies::select_by_theater_id($t->theater_id);
                }
            } else {
                $movies = Playing_movies::select_by_theater_id($id);
            }


            ?>
            <div class="card" style="margin-bottom: 20px ; border-left:gold solid 10px ;" id="remove-border-redius">
                <div class="card-header">
                    <b style="color: chocolate"><?= $t->theater_name ?></b>
                    <button class="btn btn-primary" id="remove-border-redius" style="float: right" type="button" onclick="document.getElementById(view(<?= $id ?>))"> VIEW
                        PLAYING MOVIES
                    </button>
                    <p> <?php echo $t->place . " | " . $t->contact_number ?> </p>
                </div>
                <!--  JS hide post-->
                <div class="card-body" id="view-page<?= $id ?>" style="display: none">

                    <h5 class="card-title"><?php
                        if (!empty($movies)) { ?>
                            PLAYING MOVIES
                            <?php
                        } else { ?>

                            NOTHING PLAYING ANY MOVIES RIGHT NOW
                            <?php
                        }

                        ?></h5>
                    <div class="row">


                        <?php

                        foreach ($movies as $movie):

                            $img_url = Movie::find_movie_img($movie->movie_id);
                            ?>

                            <?php

                            $today = date('Y-m-d');

                            $release = Movie::find_movie_release_date($movie->movie_id);
                            $date = $release['release_date'];

                            $movie_release_date = date_format(date_create($date), 'Y-m-d');

                            if ($today >= $movie_release_date) {
                                ?>
                                <div class="col-sm-3" style="margin-bottom: 30px">
                                    <img src="<?= AppHelper::getBaseURL() ?>/imgs/<?= $img_url['img_url'] ?>"
                                         alt=""
                                         style="width: 100%">


                                    <h5> <?php
                                        $movie_id = $movie->movie_id;
                                        $res = Movie::select_movie_name_by_movie_id($movie_id);

                                        foreach ($res as $mName) {
                                            echo $mName->movie_name;
                                        }
                                        ?></h5>

                                    <h4 style="color: darkred"> Show Times</h4>
                                    <?php
                                    $theater_id = $movie->theater_id;
                                    $show_time = Movie::find_movie_show_time($movie_id, $theater_id);
                                    foreach ($show_time as $st) {

                                        $time = strtotime($st->show_time);
                                        echo date('H:i:s', $time) . " | ";
                                    }
                                    ?>

                                </div>

                                <?php
                            } else {
                                ?>


                                <div class="row">
                                    <div class="col-sm">
                                        <hr>
                                        <div class="col-sm-3" style="margin-bottom: 30px">
                                            <h5 style="color: darkred"> UPCOMING MOVIE</h5>
                                            <h5 class="text-center" style="color:darkcyan">Release
                                                on <?= $mName->release_date ?></h5>
                                            <img src="<?= AppHelper::getBaseURL() ?>/imgs/<?= $img_url['img_url'] ?>"
                                                 alt=""
                                                 style="width: 100%">


                                            <h5> <?php
                                                $movie_id = $movie->movie_id;
                                                $res = Movie::select_movie_name_by_movie_id($movie_id);

                                                foreach ($res as $mName) {
                                                    echo $mName->movie_name;
                                                }
                                                ?></h5>


                                            <h4 style="color: darkred"> Show Times</h4>
                                            <?php
                                            $theater_id = $movie->theater_id;
                                            $show_time = Movie::find_movie_show_time($movie_id, $theater_id);
                                            foreach ($show_time as $st) {

                                                $time = strtotime($st->show_time);
                                                echo date('H:i:s', $time) . " | ";
                                            }
                                            ?>

                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                            ?>


                        <?php

                        endforeach; ?>

                    </div>

                </div>
            </div>
        <?php endforeach; ?>


    </div>


</div>

