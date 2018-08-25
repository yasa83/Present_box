<?php
session_start();

if(!isset($_SESSION['register'])){
    header('Location:signup.php');
    exit();
}

    $name = $_SESSION['register']['name'];
    $birthday = $_SESSION['register']['birthday'];
    $id = $_SESSION['register']['id'];
    $password = $_SESSION['register']['password'];
    $img_name = $_SESSION['register']['img_name'] ;


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Present Box</title>
    <link rel="icon" type="images/favicon.png" href="assets/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body background="assets/images/alcohl.jpg">
    <div class="container">
        <div class="row">
            <!-- ここから -->
            <div class="col-xs-6 thumbnail">
                <h2 class="text-center content_header">Can you check again?</h2>
                <div class="row">
                    <div class="col-xs-4">
                        <img src="user_profile_image/<?php echo htmlspecialchars($img_name); ?>" width="200" class="img-responsive img-thumbnail">
                    </div>
                    <div class="col-xs-8">
                        <div>
                            <span>user name</span>
                            <p class="lead"><?php echo htmlspecialchars($name); ?></p>
                        </div>
                        <div>
                            <span>birthday</span>
                            <p class="lead"><?php echo htmlspecialchars($birthday); ?></p>
                        </div>
                        <div>
                            <span>user ID</span>
                            <p class="lead"><?php echo htmlspecialchars($id); ?></p>
                        </div>
                        <div>
                            <span>password</span>
                            <p class="lead">●●●●●●●●</p>
                        </div>
                        <form method="POST" action="thanks.php">
                            <input type="hidden" name="action" value="submit">
                            <input type="submit" class="btn btn-primary" value="user register">
                            <a href="signup.php?action=rewite" class="btn btn-default" font color="#F14E95">&laquo;&nbsp;back</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
