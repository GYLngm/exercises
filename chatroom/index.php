<?php
    require_once("UserRepository.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat room</title>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/main.css">
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
</head>
<body>
<?php
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