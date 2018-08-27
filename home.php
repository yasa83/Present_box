<?php
session_start();
require('dbconnect.php');

// 直接このページに来たらsignin.phpに飛ぶようにする
if(!isset($_SESSION['id'])){
    header('Location:signin.php');
    exit();
}

//サインインユーザー情報取得
$sql = 'SELECT * FROM `users` WHERE `id` =?';
$data = array($_SESSION['id']);
$stmt = $dbh->prepare($sql);
$stmt->execute($data);

$signin_user = $stmt->fetch(PDO::FETCH_ASSOC);

// エラーの初期化
$errors = array();

//友達データ取得
$sql = 'SELECT * FROM `friends`';
$data = array();
$stmt = $dbh->prepare($sql);
$stmt->execute($data);

$friends = array();
    while (1) {
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        if($rec == false) {
            break;
        }
        $friends[] = $rec;
    }



?>

<!DOCTYPE html>
<html class="no-js"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Present Box</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO">
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive">
    <meta name="author" content="FREEHTML5.CO">
    <link rel="icon" type="assets/images/favicon.png" href="assets/images/favicon.png">
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
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(assets/images/background-image1.jpg);" style="background-size: 100%;">
        <div class="overlay"></div>
        <div class="fh5co-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>Whose present</h1>
                            <h2>do you search?</h2>
                            <form>
                                <div class=“input-group”>
                                <input type=“text” placeholder=“友達の名前や商品名を入力してください“>
                                <span class=“input-group-btn”>
                                    <button type=“button” class=“btn square_btn" style="color: #F14E95">Search</button>
                                </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- ヘッダー終わり -->
    <div class="body">
            <div class="container">
                <div class="row">
                    <div class="flame">
                        <?php foreach($friends as $friend): ?>
                            <section class="profile clearfix" style="display: inline-block;">
                                <a ><?php echo $friend['friends_name']; ?></a>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img src="friend_profile_image/<?php echo $friend['img_name']; ?>" class="piture-ajust img-profile" style="width: 200px; height: 200px;">
                                            </div>
                                            <div class="col-sm-2" ><img src="assets/images/present1.png" class="present-image" style="padding-top: 20px">
                                            </div>
                                            <div class="col-sm-2"><img src="assets/images/present1.png" class="present-image" style="padding-top: 20px">
                                            </div>
                                            <div class="col-sm-2"><img src="assets/images/present1.png" class="present-image" style="padding-top: 20px">
                                            </div>
                                            <div class="col-sm-2"><img src="assets/images/present1.png" class="present-image" style="padding-top: 20px">
                                            </div>
                                        </div>
                                    </div>
                            </section>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
    </div>
    </div>

<!--wrap終わり-->
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

