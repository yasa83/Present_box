<?php
session_start();
require('dbconnect.php');



//サインインユーザー情報取得
$sql = 'SELECT * FROM `users`where `id` =?';
$data = array($_SESSION['id']);
$stmt = $dbh->prepare($sql);
$stmt->execute($data);

$signin_user = $stmt->fetch(PDO::FETCH_ASSOC);

$title = '';
$price = '';
$detail = '';

if(!empty($_POST)){
    $title = $_POST['input_title'];
    $price = $_POST['input_price'];
    $detail = $_POST['input_detail'];

    if ($title == '') {
        $errors['title'] = 'blank';

    }

    if($price == ''){
        $errors['price'] = 'blank';
    }

    if($detail == '') {
        $errors['detail'] = 'blank';
        // var_dump($errors);
    }

$file_name = '';
    if(!isset($_GET['action'])){
        $file_name = $_FILES['img_name']['name'];
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

    if(empty($errors)){
        $date_str = date('YmdHis');
        $submit_file_name = $date_str . $file_name;

        move_uploaded_file($_FILES['img_name']['tmp_name'],'want_image/'.$submit_file_name);

        $sql = 'INSERT INTO `wants` SET `name` =?,`price`=?,`detail`=?,`img_name`=?';
        $data = array($title,$price,$detail,$submit_file_name);
        $stmt = $dbh->prepare($sql);
        $stmt->execute($data);

        header('Location: want.php');
        exit();
    }

}

    $sql ="SELECT * FROM `wants`";
    $stmt= $dbh->prepare($sql);
    $stmt->execute();

    $feeds = array();

    while (true) {
        $record = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($record == false) {
            break;
        }

        $feeds[] = $record;
    }

?>

<!DOCTYPE html>
<html class="no-js"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="images/favicon.png" href="assets/images/favicon.png"”>
    <title>Present Box</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

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
    <link rel="stylesheet" href="assets/css/want.css">



    <!-- Modernizr JS -->
    <script src="assets/js/modernizr-2.6.2.min.js"></script>
</head>
<body>
    <!-- ナビゲーション始まり -->
<?php include('nav-var.php'); ?>
    <!-- ナビゲーション終わり -->



    <!-- ヘッダー始まり -->
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(assets/images/want.jpg);">
        <div class="overlay" style="padding: 20px"></div>


    <div class="container" style="padding-top:20px;">
      <div class="col-xs-8 col-xs-offset-2 thumbnail">
        <h2 class="text-center content_header">Want List</h2>

        <form method="POST" action="want.php" enctype="multipart/form-data">
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="input_title" class="form-control" id="title" placeholder="あなたが欲しいものを入力してください">
            <?php if(isset($errors['title']) && $errors['title'] =='blank'): ?>
            <p class="text-danger">Enter Title</p>
            <?php endif;?>
          </div>

          <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="input_price" class="form-control" value="" placeholder="だいたいの値段を入力してください">
            <?php if(isset($errors['price']) && $errors['price'] =='blank'): ?>
                <p class="text-danger">Enter Price</p>
            <?php endif;?>
          </div>

          <div class="form-group">
            <label for="detail">Detail</label>
            <input type="text" name="input_detail" class="form-control" rows="10" placeholder="どこで買えるかなどを入力してください" value="">
            <?php if(isset($errors['detail']) && $errors['detail'] =='blank'): ?>
                <p class="text-danger">Enter Detail</p>
            <?php endif;?>
          </div>

          <div class="form-group">
            <label for="img_name"></label>
            <input type="file" name="img_name" id="image/*"
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
            <li class="active"><a href="home.php" style="margin: 15px,background-color: black;">Back</a></li>
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
                  <?php foreach ($feeds as $feed) {?>
                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(want_image/<?php echo $feed['img_name']; ?>); "> 
                            <a href=want_image/<?php echo $feed['img_name']; ?>>
                                <div class="case-studies-summary">                               
                                    <h2><?php echo $feed['name']; ?></h2>
                                    <h3><?php echo $feed['price']; ?></h3>
                                    <figure>
                                        <figcaption>
                                        <p> <?php echo $feed['detail']; ?></p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </a>
                        </li>  
                    <?php } ?>
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

