<div class="text-center">
    <h1> Welcome <?php if (!empty($_SESSION)) {
            echo $_SESSION['user'];
        } ?> ! </h1>
    <p><i>"Sellam Premier, thank you again for entrusting movies.lk with your most important business needs. We are
            honored to serve you."</i></p>
    <hr>


    <!-- Adding new movie tag-->
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <button class="btn btn-danger" id="remove-border-redius" type="button"
                    onclick="document.getElementById(add_movie())"> Add New Movie Release In Your Theater !
            </button>

            <form action="<?= AppHelper::getBaseURL() ?>/process/theater_adding_movie.php" id="new_movie"
                  style="margin-top: 20px;text-align: left ; display: none" method="post">

                <div class="form-group">
                    <lable> Select Movie</lable>
                    <select class="form-control" name="movie" id="remove-border-redius">

                        <?php $movies = Movie::select_movies();
                        foreach ($movies as $movie):
                            ?>
                            <option value="<?= $movie->id ?>"><?= $movie->movie_name ?></option>

                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <lable> Show Times</lable>
                    <input id="remove-border-redius" type="time" class="form-control" name="show_time">
                </div>


                <button type="submit" id="remove-border-redius" style="float: right" class="btn btn-danger"> Submit
                </button>

            </form>
        </div>
    </div>

    <!-- End Adding new movie tag -->


    <?php
    $theaters = Theaters::selectAll();
    $id = $_SESSION['id'];
    $movies = Playing_movies::select_by_theater_id($id);
    ?>

    <div class="row" style="margin-top: 50px">


        <div class="card-body">
            <h4 class="card-title text-left" style="color: darkblue"><?php
                if (!empty($movies)) { ?>
                    PLAYING MOVIES
                    <?php
                } else { ?>

                    NOTHING PLAYING ANY MOVIES RIGHT NOW
                    <?php
                }

                ?></h4>
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
                                ?>
                                <form action="<?= AppHelper::getBaseURL() ?>/process/delete_show_time.php?id=<?= $st->id ?>" method="post">
                                    <button class="btn btn-info" type="submit" id="remove-border-redius"
                                            style="margin-bottom: 10px">
                                        Delete show time | <?= date('H:i:s', $time) ?></button>
                                </form>

                                <?php


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
                                    <h4 class="text-left" style="color: darkred"> UPCOMING MOVIE</h4>
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
                                        ?>
                                        <form action="<?= AppHelper::getBaseURL() ?>/process/delete_show_time.php?id=<?= $st->id ?>"
                                              method="post">
                                            <button type="submit" class="btn btn-info" id="remove-border-redius"
                                                    style="margin-bottom: 10px">
                                                Delete show time | <?= date('H:i:s', $time) ?></button>
                                        </form>

                                        <?php
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
</div>