<?php

$errors = array();

if(!empty($_POST)){
    $name = $_POST['users_name'];

    if($name == ''){
        $errors['name'] = 'blank';
        var_dump($errors['name']);
        die();
    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <link rel="icon" type="images/favicon.png" href="assets/images/favicon.png">
    <title>Present Box</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body background="assets/images/alcohl.jpg">
    <div class="container">
        <div class="row main">
            <div class="panel-heading">
               <div class="panel-title text-center">
                    <h1 class="title">register</h1>
                    <hr>
                </div>
            </div> 
            <div class="main-login main-center">
                <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Your Name</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="users_name" id="name"  placeholder="Enter your Name">
                                <?php if(isset($errors['name']) && $errors['name'] == 'blank'): ?>
                                    <p class="text-danger">Enter your name</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username" class="cols-sm-2 control-label">User ID</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="users_name" id="username"  placeholder="Enter your User ID"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="cols-sm-2 control-label">Password</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group ">
                        <button class="btn btn-primary btn-lg btn-block login-button">Register</button>
                    </div>
                    <div class="back">
                        <a href="index.php" class="btn btn-default"><font color="#F14E95">&laquo;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;back</a></font>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>