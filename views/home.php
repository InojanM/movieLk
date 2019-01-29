<div style="margin-top: 70px ">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>


        <div class="carousel-inner">

            <div class="item active">
                <img src="<?= AppHelper::getBaseURL() ?>/imgs/Sarkar.jpg" alt="Los Angeles"
                     style="width:100%;">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>LA is always so much fun!</p>
                </div>
            </div>

            <div class="item">
                <img src="<?= AppHelper::getBaseURL() ?>/imgs/petta.jpg" alt="Chicago" style="width:100%;">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>
            </div>

            <div class="item">
                <img src="<?= AppHelper::getBaseURL() ?>/imgs/visuwasam.jpg" alt="New York"
                     style="width:100%;">
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>

            <div class="item">
                <img src="<?= AppHelper::getBaseURL() ?>/imgs/aqua_man.jpg" alt="Los Angeles"
                     style="width:100%;">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>LA is always so much fun!</p>
                </div>
            </div>

            <div class="item">
                <img src="<?= AppHelper::getBaseURL() ?>/imgs/hindi.jpg" alt="Chicago" style="width:100%;">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>
            </div>


        </div>


        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


</div>

<div class="row">
    <div class="col-sm-3">
        <h4 class="text-center" style="margin-top: 20px"> TOP MOVIES</h4>
        <h5> IN YOUR REGION </h5>
        <ul class="list-group list-group-flush">
            <?php
            $top_movies = Movie::select_top_movies();
            foreach ($top_movies as $movie): ?>
                <li class="list-group-item"> <?= $movie->movie_name ?></li>
            <?php endforeach; ?>
        </ul>

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
                        <h5> <?= $rm->language ?></h5>
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
                        <h5> <?= $rm->language ?></h5>
                        <a href="<?= AppHelper::getBaseURL() ?>/index.php/theaters?id=<?= $rm->id ?>">
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
                        <h5> <?= $um->language ?></h5>
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


</div>
</div>



