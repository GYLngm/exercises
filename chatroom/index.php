<?php
    require_once("UserRepository.php");
    require_once("LoginController.php");
    require_once("MessageController.php");

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
</head>
<body>
<?php

    $login_handler = new LoginController();
    if(isset($_POST['username']))
    {
        if(!$login_handler->login($_POST['username'],$_POST['password']))
        {
          die('login error');
        }
    } 

    if(isset($_GET['actionType']) && $_GET['actionType'] == 'dashbord')
        include("main.php");
    else
        include("login.php");

?>
    <script type="text/javascript" src="public/js/main.js"></script>
</body>
</html>

<?php
    
?>