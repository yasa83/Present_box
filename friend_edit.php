<?php
session_start();
require('dbconnect.php');

//サインインユーザー情報取得
$sql = 'SELECT * FROM `users` WHERE `id` =?';
$data = array($_SESSION['id']);
$stmt = $dbh->prepare($sql);
$stmt->execute($data);

$signin_user = $stmt->fetch(PDO::FETCH_ASSOC);

// // list.phpから飛んで来た時データを受け取る
// if(!empty($_GET)){
//     $friend_id = $_GET['id'];
// }

// DBから友達のデータを取得する処理
if (isset($_GET['id'])) {
$sql = 'SELECT * FROM `friends` WHERE `id` = ?';
$data = array($_GET['id']);
$stmt = $dbh->prepare($sql);
$stmt->execute($data);
$friends = $stmt->fetch(PDO::FETCH_ASSOC);
}


$errors = array();

if(!empty($_POST)){
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $id = $_POST['id'];

    if($name == '' ){
        $errors['name'] = 'blank';
    } 

    if($birthday == ''){
        $errors['birthday'] = 'blank';
    }

    //エラーがなかった時の処理
    if(empty($errors)){
        $sql = 'UPDATE `friends` SET `friends_name` = ?, `birthday` = ? WHERE `id` = ?';
        $data = array($name, $birthday, $id);
        $stmt = $dbh->prepare($sql);
        $stmt->execute($data);

        header('Location: list.php?id=' . $id);
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
      <link rel="stylesheet" href="assets/css/friend.css">
       <link rel="stylesheet" media="(max-width: 640px)" href="assets/css/mobile.css">
         <link rel="stylesheet" href="assets/css/moc_fix.css">
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
                <h2 class="text-center content_header"><br><?php echo $friends['friends_name']; ?> Profile</h2>
                <div class="col-xs-5 flexbox-container-vertical-center">
                    <img src="friend_profile_image/<?php echo $friends['friend_img']; ?>" class="piture-ajust img-profile" style="width: 290px; height: auto; border-radius: 5%;">
                </div>
                <div class="col-xs-7">
                    <form method="POST" action="friend_edit.php" enctype="multipart/form-data">
                        <div class="form-group first">
                            <ul class="text-left" >
                                <label for="title">Name</label>
                                <li><textarea name="name" class="form-control"><?php echo $friends['friends_name']; ?></textarea></li>
                                <?php if(isset($errors['name'])&& $errors['name'] == 'blank'): ?>
                                <p class="text-danger">enter friend's name</p>
                                <?php endif;?>
                                <br>
                                <label for="price">Birthdy</label>
                                <li><textarea name="birthday" class="form-control"><?php echo $friends['birthday']; ?></textarea></li>
                                <?php if(isset($errors['birthday'])&& $errors['birthday'] == 'blank'): ?>
                                <p class="text-danger">enter friend's birthday</p>
                                <?php endif;?>
                                <br>
                            </ul>
                    </div>
                    <br>
                    <input type="hidden" name="id" value="<?php echo $friends['id']; ?>">
                <div class="text-center content_header bt-2">
                    <a href="list.php?id=<?php echo $friends['id']; ?>" style="margin: 15px,background-color: black;">Back</a>
                    <input type="submit" class="btn btn-primary" value="Edit">
                </div>
                </form>
            </div>
        </div>
    </div>
    </header>
    <!-- ヘッダー終わり -->




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
<!-- Main -->
<script src="assets/js/main.js"></script>

</body>
</html>