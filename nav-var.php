    <!-- ナビゲーション始まり -->
    <div class="fh5co-loader"></div>
        <div id="page">
            <nav class="fh5co-nav" role="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-4">
                            <div id="fh5co-logo"><a href="home.php">Present Box</a></div>
                        </div>
                        <div class="col-xs-8 text-right menu-1">
                            <ul>
                                <li class="dropdown">

                                    <a href="signout.php">signout</a>
                                    <a href="friend.php">addFriend</a></li>
                                    <li class="active space-1"><a href="want.php">myWantList</a></li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="user_profile_img/<?php echo $signin_user['img_name']; ?>" width="40" class="img-circle"><?php echo $signin_user['users_name']; ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <!-- ナビゲーション終わり -->