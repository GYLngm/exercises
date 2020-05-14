<?php
    require_once("web/repository/UserRepository.php");
    require_once("web/controllers/LoginController.php");
    require_once("web/controllers/MessageController.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat room</title>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/main.css">
    <script src="public/js/jquery.min.js"></script>
    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/angular-1.7.9/angular.min.js"></script>
    <script type="text/javascript" src="public/js/main.js"></script>
</head>
<body>

<?php
/*
    header("Location:");
    $login_handler = new LoginController();
    if(empty($_SESSION['user']) && isset($_POST['username']))
    {
        if(!$login_handler->login($_POST['username'],$_POST['password']))
        {
          die('login error');
        }
    } 

    if(isset($_POST['actionType']) && $_POST['actionType'] == 'dashbord'){
        include("main.php");
    } else {
        include("login.php");
    }
*/
?>
    <app-root></app-root>
</body>
</html>

<?php
    
?>