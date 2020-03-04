
<?php

?>

<div class="container d-flex justify-content-center">
        <form action="index.php" method="POST">
            <div class="login-box">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" />
                <label for="password">Password</label>
                <input type="text" class="form-control" name="password" />
                <input type="submit" class="mt-4 float-right btn btn-dark" value="Login" />
            </div>
            <input type="hidden" name="actionType" value="dashbord" /> 
            <input type="hidden" name="login" value="1">
        </form>
</div>

<div class="container d-flex justify-content-center">
        <form action="index.php" method="POST">
            <div class="login-box">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" />
                <label for="password">Password</label>
                <input type="text" class="form-control" name="password" />
                <label for="repassword">Renter password</label>
                <input type="text" class="form-control" name="repassword" />
                <input type="submit" class="mt-4 float-right btn btn-dark" value="Login" />
            </div>
            <input type="hidden" name="actionType" value="dashbord" /> 
            <input type="hidden" name="register" value="1">
        </form>
</div>
