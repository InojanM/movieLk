function view(id) {

    var details = document.getElementById('view-page' + id);

    if (details.style.display === "none") {
        details.style.display = "block";
    }
    else {
        details.style.display = "none";
    }


}

function add_movie() {

    var new_movie = document.getElementById('new_movie');
    if (new_movie.style.display === "none") {
        new_movie.style.display = "block";
    } else {
        new_movie.style.display = "none";
    }


}

function add_show_time() {
    var new_movie = document.getElementById('show_time');
    if (new_movie.style.display === "none") {
        new_movie.style.display = "block";
    } else {
        new_movie.style.display = "none";
    }
}

function close_movie_post() {
    var movie = document.getElementById('movie');
    if (movie.style.display === "block") {
        movie.style.display = "none";
    } else {
        movie.style.display = "none";
    }
}

function show_adding_movie() {
    var view = document.getElementById('add_movie');
    if (view.style.display === "block") {
        view.style.display = "none";
    }
    else {
        view.style.display = "block";
    }

}

function show_adding_theater() {
    var view = document.getElementById('add_theater');
    if (view.style.display === "block") {
        view.style.display = "none";
    }
    else {
        view.style.display = "block";
    }

}

