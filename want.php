<!DOCTYPE html>
<html class="no-js"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="images/favicon.png" href="images/favicon.png"”>
    <title>Present Box</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
</head>
<body>

    <!-- ナビゲーション始まり -->
    <div class="fh5co-loader"></div>
    <div id="page">
        <nav class="fh5co-nav" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4">
                        <div id="fh5co-logo"><a href="home.html">Present Box<strong>.</strong></a></div>
                    </div>
                    <div class="col-xs-8 text-right menu-1">
                        <ul>
                            <li><a href="＃">signout</a></li>
                            <li class="active"><a href="#">mypage</a></li>
                            <li class="has-dropdown">
                            <a href="#"></a>
                            <ul class="dropdown">
                                <li><a href="#">present</a></li>
                                <li><a href="#">friends</a></li>
                            </li>
                            <li><a href="#">####</a></li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- ナビゲーション終わり -->



    <!-- ヘッダー始まり -->
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/want.jpg);">
        <div class="overlay" style="padding: 20px"></div>


    <div class="container" style="padding-top:50px;">
      <div class="col-xs-8 col-xs-offset-2 thumbnail">
        <h2 class="text-center content_header">Want List</h2>
        <form method="POST" action="#" enctype="multipart/form-data">
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="input_title" class="form-control" id="title" placeholder="あなたが欲しいものを入力してください">
          </div>


          <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="input_price" class="form-control" value="" placeholder="だいたいの値段を入力してください">
          </div>

          <div class="form-group">
            <label for="detail">Detail</label>
            <input type="text" name="input_detail" class="form-control" rows="10" placeholder="どこで買えるかなどを入力してください" value="">
          </div>

          <div class="form-group">
            <label for="img_name"></label>
            <input type="file" name="input_img_name" id="image/*"
            id="img_name">
            <?php if(isset($errors['img_name']) && $errors['img_name'] == 'blank'): ?>
            <p class="text-danger">画像を選択してください</p>
            <?php endif; ?>
            <?php if(isset($errors['img_name']) && $errors['img_name'] == 'type'): ?>
            <p class="text-danger">拡張子が「jpg」「png」「gif」「jpge」の画像を選択して下さい</p>
            <?php endif; ?>
          </div>

          <br>

          <ul class="nav navbar-nav navbar-left">
            <li class="active"><a href="index.php" style="margin: 15px,background-color: black;">Back</a></li>
          </ul>
          <input type="submit" class="btn btn-primary" value="POST">
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
                        
                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-1.jpg); "> 
                        <a href="images/gallery-1.jpg">
                            <div class="case-studies-summary">
                                <h2>商品名</h2>
                            </div>
                        </a>
                    </li>
                    <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-2.jpg); ">
                        <a href="#" class="color-2">
                            <div class="case-studies-summary">
                               <h2>商品名</h2>
                            </div>
                        </a>
                    </li>


                    <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-3.jpg); ">
                        <a href="#" class="color-3">
                            <div class="case-studies-summary">
                               <h2>商品名</h2>
                            </div>
                        </a>
                    </li>
                    <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-4.jpg); ">
                        <a href="#" class="color-4">
                            <div class="case-studies-summary">
                               <h2>商品名</h2>
                            </div>
                        </a>
                    </li>

                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-5.jpg); ">
                            <a href="#" class="color-3">
                                <div class="case-studies-summary">
                                   <h2>商品名</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-6.jpg); ">
                            <a href="#" class="color-4">
                                <div class="case-studies-summary">
                                 <h2>商品名</h2>
                                </div>
                            </a>
                        </li>

                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-7.jpg); ">
                            <a href="#" class="color-4">
                                <div class="case-studies-summary">
                                    <h2>商品名</h2>
                                </div>
                            </a>
                        </li>

                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-8.jpg); "> 
                            <a href="#" class="color-5">
                                <div class="case-studies-summary">
                                    <h2>商品名</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-9.jpg); ">
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
                        <small class="block">&copy; チームはしうち　Nexseed</small> 
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
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="js/jquery.countTo.js"></script>

<!-- Stellar -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>

<!-- Main -->
<script src="js/main.js"></script>

</body>
</html>

