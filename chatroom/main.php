
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            </ul>
        </div>
        </nav>

        <div class="container mt-4">
            <div style="display:inline-block;">
                <ul class="friends">
                    <?php
                        require_once("UserRepository.php");
                        require_once("User.php");
                        $repo = new UserRepository();
                        $users = $repo->findUsers('', true);
                        //var_dump($users);
                        foreach($users as $user){
                            $username = $user->getUsername();
                            if($user->getOnline() == 0)
                                echo sprintf('<li style="color:grey;">%s</li>', $username);
                            else
                                echo sprintf('<li style="color:black;">%s</li>', $username);
                        }
                    ?>
                </ul>
            </div>
            <div style="display:inline-block;">
                <ul class="message-box" id="message_box">

                </ul>
                <div class="input-boc">
                    <input type="hidden" name="actionType" value="sendText"/>
                    <textarea class="form-control" name="package" style="display:inline;"></textarea>
                    <button class="btn btn-primary" style="display:inline;float:right;" id="send">Send</button>
                </div>
            </div>


            <div class="row">
                <div class="col-8">
 
                </div>
                <div class="col-8">

                </div>
            </div>

        </div>
        <div class="container mt-4">
                
        </div>
