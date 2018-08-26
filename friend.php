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
        <div class="overlay" style="padding: 20px"></div>
        <div class="container" style="padding-top:50px;">
            <div class="col-xs-10 col-xs-offset-1 thumbnail" style="background-color: #f5f5f5;">
            <h2 class="text-center content_header"><br>Add your friend</h2>
            <div class="col-xs-5 flexbox-container-vertical-center">
                <img src="assets/images/friend1.png" class="piture-ajust img-profile" style="width: 370px; height: 330px;">
            </div>

            <div class="col-xs-7">

                <form method="POST" action="home.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="title">名前</label>
                    <input type="text" name="input_title" class="form-control" id="title" placeholder="あなたが欲しいものを入力してください">
                </div>


                <div class="form-group">
                    <label for="price">誕生日</label>
                    <input type="text" name="input_price" class="form-control" value="" placeholder="だいたいの値段を入力してください">
                </div>

                <div class="form-group">
                    <label for="detail">id検索</label>
                    <input type="text" name="input_detail" class="form-control" rows="10" placeholder="どこで買えるかなどを入力してください" value="">
                </div>



                <div class="form-group">
                    <label for="img_name"></label>
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


<!--wrap始まり-->

<div id="fh5co-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                <h2>your wants list</h2>
                <p>あなたがほしいもの</p>
            </div>
        </div>
        <div class="row row-bottom-padded-md">
            <div class="col-md-12">
                <ul id="fh5co-gallery-list">

                    <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(assets/images/gallery-1.jpg); "> 
                        <a href="assets/images/gallery-1.jpg">
                            <div class="case-studies-summary">
                                <h2>商品名</h2>
                            </div>
                        </a>
                    </li>
                    <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(assets/images/gallery-2.jpg); ">
                        <a href="#" class="color-2">
                            <div class="case-studies-summary">
                             <h2>商品名</h2>
                         </div>
                     </a>
                 </li>


                 <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(assets/images/gallery-3.jpg); ">
                    <a href="#" class="color-3">
                        <div class="case-studies-summary">
                         <h2>商品名</h2>
                     </div>
                 </a>
             </li>
             <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(assets/images/gallery-4.jpg); ">
                <a href="#" class="color-4">
                    <div class="case-studies-summary">
                     <h2>商品名</h2>
                 </div>
             </a>
         </li>

         <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(assets/images/gallery-5.jpg); ">
            <a href="#" class="color-3">
                <div class="case-studies-summary">
                 <h2>商品名</h2>
             </div>
         </a>
     </li>
     <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(assets/images/gallery-6.jpg); ">
        <a href="#" class="color-4">
            <div class="case-studies-summary">
               <h2>商品名</h2>
           </div>
       </a>
   </li>

   <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(assets/images/gallery-7.jpg); ">
    <a href="#" class="color-4">
        <div class="case-studies-summary">
            <h2>商品名</h2>
        </div>
    </a>
</li>

<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(assets/images/gallery-8.jpg); "> 
    <a href="#" class="color-5">
        <div class="case-studies-summary">
            <h2>商品名</h2>
        </div>
    </a>
</li>
<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(assets/images/gallery-9.jpg); ">
    <a href="#" class="color-6">
        <div class="case-studies-summary">
            <h2>商品名</h2>
        </div>
    </a>
</li>
</ul>       
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
                    <small class="block"> チームはしうち　Nexseed</small> 
                </p>
                <p>
                    <ul class="fh5co-social-icons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
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