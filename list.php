<?php
session_start();
require('dbconnect.php');

//サインインユーザー情報取得
$sql = 'SELECT * FROM `users` WHERE `id` =?';
$data = array($_SESSION['id']);
$stmt = $dbh->prepare($sql);
$stmt->execute($data);

$signin_user = $stmt->fetch(PDO::FETCH_ASSOC);

// エラーの初期化
$errors = array();


//DBからプレゼントデータ取得
$sql = 'SELECT * FROM `presents` WHERE `friend_id` = ?';
$data = array($_GET['id']);
$stmt = $dbh->prepare($sql);
$stmt->execute($data);

$presents = array();
    while (1) {
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        if($rec == false) {
            break;
        }
        $presents[] = $rec;
    }

// DBから友達のデータを取得する処理
$sql = 'SELECT * FROM `friends` WHERE `id` = ?';
$data = array($_GET['id']);
$stmt = $dbh->prepare($sql);
$stmt->execute($data);
$friends = $stmt->fetch(PDO::FETCH_ASSOC);




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
    <link rel="icon" type="images/favicon.png" href="assets/images/favicon.png"”>
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
<?php include('nav-var.php'); ?>

    <div id="fh5co-gallery" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <span><?php echo $friends['birthday']; ?></span>
                    <h2><?php echo $friends['friends_name']; ?></h2>
                    <form method="GET" action="" class="" role="search">
                        <div class="form-group">
                            <input type="text" style="width:200px"  name="search_word"  placeholder="プレゼントを検索">
                            <span class="form-group">
                                <button type="button" class="btn square_btn">Serch</button>
                            </span>
                        </div>
                    </form>
                    <a href="list_make.php?id=<?php echo $friends["id"]; ?>" class="btn btn-primary">register present</a>
                </div>
            </div>

            <div class="container">
                <div class="row">
                      <ul class="nav nav-tabs">
                        <li class="col-xs-2 give_1 active"><a href="#">友達にあげたもの</a></li>
                        <li class="col-xs-2 get_1"><a href="#">友達からもらったもの</a></li>
                        <li class="col-xs-2 want_1"><a href="#">友達がほしいもの</a></li>
                      </ul>
                      <br>
                </div>
            </div>

            <!-- あげたもの -->
        <div class="container">
            <div class="row row-bottom-padded-md " id="give-picture">
                <div class="col-md-12">
                    <h1 class="text-center">you gave these presents</h1>
                    <div class="row">
                        <?php foreach ($presents as $present): ?>
                            <div class="<?php echo $present["which"];?>">
                                <div class="col-xs-4">
                                    <a data-target="con1" class="modal-open">
                                        <img src="present_image/<?php echo $present['img_name']; ?>" class="picture-size" style="width:300px; height:300px; border-radius: 5%; margin: 10px; ">
                                    </a>
                                </div>
                                <!-- モーダル -->
                                <div id="con1" class="modal-content" style="width: 800px; height: 500px;">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <br><br><img src="present_image/<?php echo $present['img_name']; ?>" class="picture-size">
                                        </div>
                                        <div class="col-md-6" style="font-size: 25px; line-height: 4em;">
                                            <ul class="text-left" >
                                                <li>商品名</li>
                                                <li>値段</li>
                                                <li>ひとこと</li>
                                            </ul>
                                            <p style="font-size: 15px; line-height: 1em;">リンク1の内容です。</p>
                                            <br>
                                            <p><a class="modal-close right-under">閉じる</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>


<!-- もらったもの -->
        <div class="container">
            <div class="row row-bottom-padded-md " id="get-picture">
                <div class="col-md-12">
                    <h1 class="text-center">you got these presents</h1>
                    <div class="row">
                        <?php foreach ($presents as $present): ?>
                            <div class="<?php echo $present["which"] ?>">
                                <div class="col-xs-4 ">
                                    <a data-target="con1" class="modal-open">
                                        <img src="present_image/<?php echo $present['img_name']; ?>" class="picture-size" style="width:300px; height:300px; border-radius: 5%; margin: 10px; ">
                                    </a>
                                </div>
                                <!-- モーダル -->
                                <div id="con1" class="modal-content" style="width: 800px; height: 500px;">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <br><br><img src="present_image/<?php echo $present['img_name']; ?>" class="picture-size">
                                        </div>
                                        <div class="col-md-6" style="font-size: 25px; line-height: 4em;">
                                            <ul class="text-left" >
                                                <li>商品名</li>
                                                <li>値段</li>
                                                <li>ひとこと</li>
                                            </ul>
                                            <p style="font-size: 15px; line-height: 1em;">リンク1の内容です。</p>
                                            <br>
                                            <p><a class="modal-close right-under">閉じる</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>


<!-- ほしいもの -->

            <div class="row row-bottom-padded-md " id="want-picture">
                <div class="col-md-12">
                    <h1 class="text-center">your friend want these presents</h1>
                    <div class="row">
                        <?php foreach ($presents as $present): ?>
                            <div class="<?php echo $present["which"] ?>">
                                <div class="col-xs-4 ">
                                    <a data-target="con1" class="modal-open">
                                        <img src="present_image/<?php echo $present['img_name']; ?>" class="picture-size" style="width:300px; height:300px; border-radius: 5%; margin: 10px; ">
                                    </a>
                                </div>
                                <!-- モーダル -->
                                <div id="con1" class="modal-content" style="width: 800px; height: 500px;">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <br><br><img src="present_image/<?php echo $present['img_name']; ?>" class="picture-size">
                                        </div>
                                        <div class="col-md-6" style="font-size: 25px; line-height: 4em;">
                                            <ul class="text-left" >
                                                <li>商品名</li>
                                                <li>値段</li>
                                                <li>ひとこと</li>
                                            </ul>
                                            <p style="font-size: 15px; line-height: 1em;">リンク1の内容です。</p>
                                            <br>
                                            <p><a class="modal-close right-under">閉じる</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

    <?php include('footer.php'); ?>
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
    <!--    自分で作ったやつ -->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/simplyCountdown.js"></script>
    <!-- Main -->
    <script src="assets/js/main.js"></script>
    <script>
        var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
    </script>

</body>
</html>

