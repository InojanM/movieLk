<h3 class="text-center" style="color: cornflowerblue"> Welcome to MR Admin ... ! <i> Have an nice day for you </i></h3>

<div class="text-center">
    <button class="btn btn-danger" id="remove-border-redius" onclick="document.getElementById(show_adding_movie())"> Add
        New Movie
    </button>
    <button class="btn btn-danger" id="remove-border-redius" onclick="document.getElementById(show_adding_theater())">
        Add New Theater
    </button>
</div>

<div class="row">
    <div class="col-sm-6 offset-sm-3">

        <form action="../process/adding_new_movie.php" id="add_movie"
              style="margin-top: 20px;text-align: left ; display: none" method="post">

            <div class="form-group">
                <lable> Add Movie</lable>
                <input type="text" class="form-control" name="movie_name" required>
            </div>


            <div class="form-group">
                <lable> Language</lable>
                <select class="form-control" name="language" id="remove-border-redius" required>
                    <option value="Tamil">Tamil</option>
                    <option value="English">English</option>
                    <option value="Sinhala">Sinhala</option>
                    <option value="Hindi">Hindi</option>
                </select>
            </div>


            <div class="form-group">
                <lable> Image Url</lable>
                <input id="remove-border-redius" type="text" class="form-control" name="img_url" required>
            </div>

            <div class="form-group">
                <lable> Movie Release Date</lable>
                <input id="remove-border-redius" type="date" class="form-control" name="release_date" required>
            </div>


            <button type="submit" id="remove-border-redius" style="float: right" class="btn btn-danger"> Submit
            </button>

        </form>

    </div>
</div>

<div class="row">
    <div class="col-sm-6 offset-sm-3">

        <form action="../process/adding_new_theater.php" id="add_theater" style="display: none" method="post">

            <div class="form-group">
                <lable> Theater Name</lable>
                <input type="text" name="theater" id="remove-border-redius" class="form-control">
            </div>

            <div class="form-group">
                <lable>Place</lable>
                <select class="form-control" id="remove-border-redius" name="place">
                    <option value="Batticaloa">Batticaloa</option>
                    <option value="Colombo">Colombo</option>
                    <option value="Jaffna">Jaffna</option>
                    <option value="Kiran">Kiran</option>
                </select>
            </div>

            <div class="form-group">
                <lable> Contact Number</lable>
                <input type="number" id="remove-border-redius" class="form-control" name="contact_number">
            </div>

            <div class="form-group">
                <lable> Provide User Name</lable>
                <input type="text" id="remove-border-redius" name="user_name" class="form-control">
            </div>

            <div class="form-group">
                <lable> Provide Password</lable>
                <input type="text" id="remove-border-redius" class="form-control" name="password">
            </div>

            <button type="submit" class="btn btn-danger" style="float: right" id="remove-border-redius"> Submit</button>

        </form>

    </div>
</div>

