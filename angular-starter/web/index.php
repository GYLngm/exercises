<?php
    require_once("web/repository/UserRepository.php");
    require_once("web/controllers/LoginController.php");
    require_once("web/controllers/MessageController.php");

    $UserRepo = new UserRepository();
    $response = [
      'friends' => [],
    ];

    if(isset($_GET['getfriends'])){
      $users = $UserRepo->findUsers('', true);
      foreach($users as $key => $user){
        $response['friends'][$user['uid']] = $user;
      }
      //$response['friends'] = $users;
    }

    echo json_encode($response);
?>
