<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
        <link rel="icon" type="images/favicon.png" href="assets/images/favicon.png">
        <title>Present Box</title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
       
</head>
<body>
<div src="assets/images/alcohl.jpg">
    <div class="container">
    <div class="row">
        <!-- ここから -->
            <div class="col-xs-6 thumbnail">
                <h2 class="text-center content_header">Can you check again?</h2>
                <div class="row">
                    <div class="col-xs-4">
                        <img src="images/check.jpg" class="img-responsive img-thumbnail">
                    </div>
                    <div class="col-xs-8">
                        <div>
                            <span>user name</span>
                            <p class="lead">石原さとみ</p>
                        </div>
                        <div>
                            <span>e-mail</span>
                            <p class="lead">test@fooo</p>
                        </div>
                        <div>
                            <span>user ID</span>
                            <p class="lead">aiueo</p>
                        <div>
                            <span>password</span>
                            <!-- ② -->
                            <p class="lead">●●●●●●●●</p>
                        </div>
                        <!-- ③ -->
                        <form method="POST" action="thanks.php">
                            <!-- ⑤ -->
                            <input type="hidden" name="action" value="submit">
                            <input type="submit" class="btn btn-primary" value="user register">
                            <a href="signup.php" class="btn btn-default"><font color="#F14E95">&laquo;&nbsp;back</a></font>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </div>
    <script src="assets/js/jquery-3.1.1.js"></script>
    <script src="assets/js/jquery-migrate-1.4.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
