<div class="row" style="margin-top: 170px">
    <div class="col-sm-3">

        <div style="margin-top: 20px">
            <form>
                <div class="input-group">
                    <input type="text" class="form-control" id="remove-border-redius" placeholder="Search For Movies">
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
        <h3> LANGUAGE </h3>
        <form action="" method="postt">
            <input type="checkbox" name=""> Tamil <br>
            <input type="checkbox" name=""> English <br>
            <input type="checkbox" name=""> Sinhala <br>
        </form>

        <hr>



    </div>


    <div class="col-sm-9 " style="margin-top: 30px">

        <!-- Nav pills -->
        <ul class="nav nav-pills " role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#menu1" id="remove-border-redius">Running Movies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu2" id="remove-border-redius">Upcoming Movies</a>
            </li>
        </ul>


        <!-- Tab panes -->
        <div class="tab-content">

            <div id="menu1 " class="tab-pane active "><br>

                <?php
                $running_movie = Movie::select_current_movies();
                foreach ($running_movie

                         as $rm):
                    ?>
                    <div class="col-sm-4">

                        <img src="<?= AppHelper::getBaseURL() ?>/imgs/<?= $rm->img_url ?>" alt=""
                             style="width: 100%;border-bottom-color: green ; border-bottom: 40px ; border-bottom: solid">
                        <h4> <?= $rm->movie_name ?></h4>
                        <h5> <?= $rm->lang ?></h5>
                        <a href="<?= AppHelper::getBaseURL()?>/index.php/theaters?id=<?= $rm->id?>">
                            <button class="btn btn-danger navbar-btn" id="remove-border-redius"
                                    style="width: 100%">
                                View Playing Theaters
                            </button>
                        </a>
                    </div>
                <?php endforeach; ?>


            </div>


            <div id="menu1" class="tab-pane fade "><br>

                <?php
                $running_movie = Movie::select_current_movies();
                foreach ($running_movie

                         as $rm):
                    ?>
                    <div class="col-sm-4">

                        <img src="<?= AppHelper::getBaseURL() ?>/imgs/<?= $rm->img_url ?>" alt=""
                             style="width: 100%;border-bottom-color: green ; border-bottom: 40px ; border-bottom: solid">
                        <h4> <?= $rm->movie_name ?></h4>
                        <h5> <?= $rm->lang?></h5>
                        <a href="<?= AppHelper::getBaseURL()?>/index.php/theaters?id=<?= $rm->id?>">
                            <button class="btn btn-danger navbar-btn" id="remove-border-redius"
                                    style="width: 100%">
                                View Playing Theaters
                            </button>
                        </a>
                    </div>
                <?php endforeach; ?>


            </div>


            <div id="menu2" class="tab-pane fade"><br>

                <?php
                $upcoming_movies = Movie::select_upcoming_movies();
                foreach ($upcoming_movies

                         as $um):
                    $fade = "fade";
                    ?>
                    <div class="col-sm-4">

                        <h4 style="color: chocolate" class="text-center"><i>Release on</i> <?= $um->release_date ?></h4>
                        <img src="<?= AppHelper::getBaseURL() ?>/imgs/<?= $um->img_url ?>" alt=""
                             style="width: 100%;border-bottom-color: green ; border-bottom: 40px ; border-bottom: solid">
                        <h4> <?= $um->movie_name ?></h4>
                        <h5> <?= $um->lang ?></h5>
                        <a href="<?= AppHelper::getBaseURL()?>/index.php/theaters?id=<?= $um->id?>">
                            <button class="btn btn-danger navbar-btn" id="remove-border-redius"
                                    style="width: 100%">
                                View Playing Theaters
                            </button>
                        </a>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>


</div>
</div>

