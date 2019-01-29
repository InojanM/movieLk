<div class="row">
    <h3 style="margin-bottom: 30px;text-align: center"><i>Hello Admin welcome to your page ! login your page through
            your admin name and password !</i></h3>
    <div class="col-md-4 offset-md-4">
        <form action="<?= AppHelper::getBaseURL() ?>/process/admin_login.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">ADMIN NAME </label>
                <input type="text" class="form-control" id="remove-border-redius" name="admin" ">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">PASSWORD</label>
                <input type="password" class="form-control" id="remove-border-redius" name="password">
            </div>


            <button type="submit" class="btn btn-primary" id="remove-border-redius">Submit</button>


        </form>

    </div>
</div>

