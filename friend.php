<?php
session_start();
require('dbconnect.php');

//サインインユーザー情報取得
$sql = 'SELECT * FROM `users` WHERE `id` =?';
$data = array($_SESSION['id']);
$stmt = $dbh->prepare($sql);
$stmt->execute($data);

$signin_user = $stmt->fetch(PDO::FETCH_ASSOC);





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
                    <input type="text" name="input_title" class="form-control" id="title" placeholder="enter your friend's name">
                </div>


                <div class="form-group">
                    <label for="price">Birthdy</label>
                    <input type="text" name="input_price" class="form-control" value="" placeholder="enter your friend's birthday">
                </div>

                <div class="form-group">
                    <label for="detail">search id</label>
                    <input type="text" name="input_detail" class="form-control" rows="10" placeholder="enter id,if your friend have id" value="">
                </div>



                <div class="form-group">
                    <label for="img_name">picture</label>
                    <input type="file" name="input_img_name" id="image/*"
                    id="img_name">
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