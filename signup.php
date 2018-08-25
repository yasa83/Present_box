<?php

$errors = array();

if(!empty($_POST)){
    $name = $_POST['users_name'];
    $birthday = $_POST['users_birthday'];
    $id = $_POST['users_id'];
    $password = $_POST['users_password'];

    if($name == ''){
        $errors['name'] = 'blank';
    }

    if($birthday == ''){
        $errors['birthday'] = 'blank';
    }

    if($id == ''){
        $errors['id'] = 'blank';
    }

    $count = strlen($password);
    if($password == ''){
        $errors['password'] = 'blank';
    }elseif ($count<4 || 16 < $count) {
        $errors['password'] = 'length';
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="images/favicon.png" href="assets/images/favicon.png">
    
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/signup.css">
    <title>Present Box</title>

</head>
<body background="assets/images/alcohl.jpg">
    <div class="container">
        <div class="row main">
            <div class="panel-heading">
               <div class="panel-title text-center">
                    <h1 class="title">register</h1>
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
                            </div>
                            <?php if(isset($errors['name']) && $errors['name'] == 'blank'): ?>
                                    <p class="text-danger">Enter your name</p>
                            <?php endif;?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="birthday" class="cols-sm-2 control-label">Your Birthday</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                <input type="date" class="form-control" name="users_birthday" id="birthday"  placeholder="Enter your Birthday">
                            </div>
                            <?php if(isset($errors['birthday']) && $errors['birthday'] == 'blank'): ?>
                                    <p class="text-danger">Enter your birthday</p>
                            <?php endif;?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username" class="cols-sm-2 control-label">User ID</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="users_id" id="users_id"  placeholder="Enter your User ID">
                            </div>
                            <?php if(isset($errors['id']) && $errors['id'] == 'blank'): ?>
                                    <p class="text-danger">Enter your id</p>
                            <?php endif;?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="cols-sm-2 control-label">Password</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="users_password" id="password"  placeholder="Enter your Password">
                            </div>
                            <?php if(isset($errors['password']) && $errors['password'] == 'blank'): ?>
                                    <p class="text-danger">Enter your password</p>
                            <?php endif;?>
                            <?php if(isset($errors['password']) && $errors['password'] == 'length'): ?>
                                <p class="text-danger">please enter 4〜16 letters</p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password" oninput="CheckPassword(this)" >
                            </div>
                            <?php if(isset($errors['password']) && $errors['password'] == 'blank'): ?>
                                    <p class="text-danger">Enter your password</p>
                            <?php endif;?>


                        </div>
                    </div>

                    <div class="form-group">
                        <label for="img_name" class="cols-sm-2 control-label">profile image</label>
                        <div class="cols-sm-10">
                            <input type="file" name="input_img_name" id="img_name" >
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/signup.js"></script>
</body>
</html>