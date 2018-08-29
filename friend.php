<?php
session_start();
require('dbconnect.php');

//サインインユーザー情報取得
$sql = 'SELECT * FROM `users` WHERE `id` =?';
$data = array($_SESSION['id']);
$stmt = $dbh->prepare($sql);
$stmt->execute($data);

$signin_user = $stmt->fetch(PDO::FETCH_ASSOC);


// 友達情報登録
$name = '';
$birthday = '';
$id = '';
$errors = array();

if(!empty($_POST)){
    $name = $_POST['friend_name'];
    $birthday = $_POST['friend_birthday'];
    $friend_id = $_POST['friend_id'];

    if($name == ''){
        $errors['name'] = 'blank';
    }

    if($birthday == ''){
        $errors['birthday'] = 'blank';
    }

    // 画像名を取得
    $file_name = '';
    if(!isset($_GET['action'])){
        $file_name = $_FILES['friend_img_name']['name'];
    }
    if(!empty($file_name)){
        $file_type = substr($file_name, -3);
        $file_type = strtolower($file_type);
        if($file_type != 'jpg' && $file_type !='png' && $file_type!='gif'){
            $errors['img_name'] = 'type';
        }
    }else{
        $errors['img_name']= 'blank';
    }

    //エラーがなかった時の処理
    if(empty($errors)){
        $date_str = date('YmdHis');
        $submit_file_name = $date_str . $file_name;

        move_uploaded_file($_FILES['friend_img_name']['tmp_name'],'friend_profile_image/'.$submit_file_name);


        $sql = 'INSERT INTO `friends` SET `friends_name` =?, `birthday`=?,`img_name` = ?, `created`= NOW(), `users_id`=?';
        $data = array($name,$birthday,$submit_file_name,$friend_id);
        $stmt = $dbh->prepare($sql);
        $stmt->execute($data);

        header('Location: home.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html class="no-js"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="icon" type="images/favicon.png" href="assets/images/favicon.png">
    <title>Present Box</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO">
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive">
    <meta name="author" content="FREEHTML5.CO">
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Modernizr JS -->
    <script src="assets/js/modernizr-2.6.2.min.js"></script>
</head>
<body>
    <?php include("nav-var.php"); ?>
    <!-- ヘッダー始まり -->
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(assets/images/want.jpg);">
        <div class="overlay" style="padding: 5px"></div>
        <div class="container" style="padding-top:50px;">
            <div class="col-xs-10 col-xs-offset-1 thumbnail" style="background-color: #f5f5f5;">
                <h2 class="text-center content_header"><br>Add your friend</h2>
                <div class="col-xs-5 flexbox-container-vertical-center">
                    <img src="assets/images/friend1.png" class="piture-ajust img-profile" style="width: 370px; height: 330px;">
                </div>
                <div class="col-xs-7">
                    <form method="POST" action="friend.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input type="text" name="friend_name" class="form-control"  placeholder="enter your friend's name">
                            <?php if(isset($errors['name']) && $errors['name'] == 'blank'): ?>
                                <p class="text-danger">Enter friend's name</p>
                            <?php endif;?>
                        </div>
                        <div class="form-group">
                            <label for="price">Birthdy</label>
                            <input type="date" name="friend_birthday" class="form-control"  placeholder="enter your friend's birthday">
                            <?php if(isset($errors['birthday']) && $errors['birthday'] == 'blank'): ?>
                            <p class="text-danger">Enter friend's birthday</p>
                            <?php endif;?>
                        </div>
                        <div class="form-group">
                            <label for="detail">search id</label>
                            <input type="text" name="friend_id" class="form-control" rows="10" placeholder="enter id,if your friend have id" value="">
                        </div>
                        <div class="form-group">
                            <label for="img_name">picture</label>
                            <input type="file" name="friend_img_name" id="image/*"
                        id="img_name">
                            <?php if(isset($errors['img_name'])&& $errors['img_name'] == 'blank'): ?>
                                <p class="text-danger">enter friend's image</p>
                            <?php endif;?>
                            <?php if(isset($errors['img_name'])&& $errors['img_name'] == 'type'): ?>
                                <p class="text-danger">only 'jpg'.'png','gif' type</p>
                            <?php endif;?>
                        </div>
                    </div>
                    <br>
                <div class="text-center content_header">
                    <a href="home.php" style="margin: 15px,background-color: black;">Back</a>
                    <input type="submit" class="btn btn-primary" value="POST">
                </div>
                </form>
            </div>
        </div>
    </div>
    </header>
    <!-- ヘッダー終わり -->




    <!-- フッター始まり -->
    <footer id="fh5co-footer" role="contentinfo">
        <div class="container">
            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">&copy; 43batch チームはしうち　Nexseed<br>
                        FREEHTML5.CO</small> 
                    </p>
                    <p>
                        <ul class="fh5co-social-icons">
                            <li><a href="https://twitter.com/nexseed_cebu"><i class="icon-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/NexSeed/"><i class="icon-facebook"></i></a></li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- フッター終わり -->


<!-- 画面遷移用の矢印 -->
</div>
<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>
</div>

<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="assets/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="assets/js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="assets/js/jquery.countTo.js"></script>
<!-- Stellar -->
<script src="assets/js/jquery.stellar.min.js"></script>
<!-- Magnific Popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/magnific-popup-options.js"></script>
<!-- Main -->
<script src="assets/js/main.js"></script>

</body>
</html>