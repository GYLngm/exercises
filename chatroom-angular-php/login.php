
<?php

?>

<div class="container d-flex justify-content-center" ng-controller="authController">
        <form action="index.php" method="POST">
            <div class="login-box">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" ng-model="username" required>
                <span style="color:red" ng-show="username.$dirty && username.$invalid">
                    <span ng-show="username.$error.required">Username is required.</span>
                </span>
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" ng-model="password" required>
                <span style="color:red" ng-show="password.$dirty && password.$invalid">
                    <span ng-show="password.$error.required">Password is required.</span>
                </span>
                <a href="#" ng-click="onclickRegister()">Register</a>
                <input type="submit" class="mt-4 float-right btn btn-dark" value="Login" />
            </div>
            <input type="hidden" name="actionType" value="dashbord" /> 
            <input type="hidden" name="login" value="1">
        </form>

        <form action="index.php" method="POST" ng-show="enableDisableRegister">
            <div class="register-box">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" required>

                <label for="password">Password</label>
                <input type="text" class="form-control" name="password" required>
                <label for="repassword">Renter password</label>
                <input type="text" class="form-control" name="repassword" required>
                <input type="submit" class="mt-4 float-right btn btn-dark" value="Register" />
            </div>
            <input type="hidden" name="actionType" value="dashbord" /> 
            <input type="hidden" name="register" value="1">
        </form>
</div>


