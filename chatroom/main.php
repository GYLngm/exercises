
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
            <div class="block-1 left">
                <ul class="friends">
                    <?php
                        require_once("UserRepository.php");
                        require_once("User.php");
                        $repo = new UserRepository();
                        $users = $repo->findUsers('', true);
                        //var_dump($users);
                        foreach($users as $user){
                            $username = $user->getUsername();
                            $uid = $user->getUid();
                            if($user->getOnline() == 0)
                                echo sprintf('<li style="color:grey;"><a href="#" id="u_%d">%s</a></li>', $uid, $username);
                            else
                                echo sprintf('<li style="color:black;"><a href="#" id="u_%d">%s</a></li>', $uid, $username);
                        }
                    ?>
                </ul>
            </div>
            <div class="block-1 right">
                <ul class="message-box" id="message_box">

                </ul>
                <div class="input-bloc">
                    <input type="hidden" name="actionType" value="sendText"/>
                    <div>
                        <textarea class="" name="package" style="
                        width: 64.9em;
                        height: 7em;
                        display: block;
                        float: left;
                        resize:none;
                        margin: 0 0;"></textarea>
                        <a href="#" class="send-btn" id="send">Send</a>
                    </div>
                </div>
            </div>
        </div>
