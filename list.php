<!DOCTYPE html>
<html class="no-js"> 
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
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

	<!-- Modernizr JS -->
	<script src="assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
		<!--[if lt IE 9]>
		<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body>
<?php include('nav-var.php'); ?>



</div>
</nav>

<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(assets/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>トモダチの名前</h1>
						<h2>誕生日</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<div id="fh5co-gallery" class="fh5co-section-gray">
	<div class="container">

		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
				<span>Our Memories</span>
				<h2>プレゼントボックス</h2>
				<p></p>

				<form method="GET" action="" class="" role="search">
					<div class="form-group">
						<input type="text" name="search_word" class="form-control" placeholder="投稿を検索">
					</div>
					<span class="form-group">
						<button type="submit" class="btn square_btn">検索</button>
					</span>
				</form>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 give_1" align="center"><button type="button" class="btn square_btn">あげたもの</button></div>
			<div class="col-xs-4 get_1" align="center"><button type="button" class="btn square_btn">もらったもの</button></div>
			<div class="col-xs-4 want_1" align="center"><button type="button" class="btn square_btn">ほしいもの</button></div>
		</div>

		<!-- あげたもの -->
		<div class="row row-bottom-padded-md " id="give-picture">
			<div class="col-md-12">
				<br>
				<h1 class="text-center">あげたもの</h1>

				<div class="row">
					<div class="col-xs-4 ">
						<a data-target="con1" class="modal-open"><img src="assets/images/prezent_1.jpg" class="picture-size"></a>
					</div>

					<div class="col-xs-4">
						<a data-target="con2" class="modal-open"><img src="assets/images/prezent_2.jpg" class="picture-size"></a>
					</div>

					<div class="col-xs-4">
						<a data-target="con3" class="modal-open"><img src="assets/images/prezent_3.jpg" class="picture-size"></a>
					</div>


					<!-- モーダル -->
					<div id="con1" class="modal-content" style="width: 800px; height: 500px;">
						<div class="row">
							<div class="col-md-6">
								<br><br><img src="assets/images/prezent_1.jpg" class="picture-size">
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

					<div id="con2" class="modal-content" style="width: 800px; height: 500px;">
						<div class="row">
							<div class="col-md-6">
								<br><br><img src="assets/images/prezent_2.jpg" class="picture-size">
							</div>
							<div class="col-md-6"><p>リンク1の内容です。</p>
								<p><a class="modal-close">閉じる</a></p>
							</div>
						</div>
					</div>

					<div id="con3" class="modal-content" style="width: 800px; height: 500px;">
						<div class="row">
							<div class="col-md-6">
								<br><br><img src="assets/images/prezent_3.jpg" class="picture-size">
							</div>
							<div class="col-md-6"><p>リンク1の内容です。</p>
								<p><a class="modal-close">閉じる</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>





		<!-- もらったもの -->
		<div class="row row-bottom-padded-md " id="get-picture">
			<div class="col-md-12">
				<br>
				<h1 class="text-center">もらったもの</h1>

				<div class="row">
					<div class="col-xs-4 ">
						<a data-target="con4" class="modal-open"><img src="assets/images/gallery-1.jpg" class="picture-size"></a>

					</div>

					<div class="col-xs-4">
						<a data-target="con5" class="modal-open"><img src="assets/images/friend1.png" class="picture-size"></a>
					</div>

					<div class="col-xs-4">
						<a data-target="con6" class="modal-open"><img src="assets/images/friend1.png" class="picture-size"></a>
					</div>


					<!-- モーダル -->
					<div id="con4" class="modal-content" style="width: 800px; height: 500px;">
						<div class="row">
							<div class="col-md-6">
								<br><br><img src="assets/images/gallery-1.jpg" class="picture-size">
							</div>
							<div class="col-md-6"><p>リンク1の内容です。</p>
								<p><a class="modal-close">閉じる</a></p>
							</div>
						</div>
					</div>

					<div id="con5" class="modal-content" style="width: 800px; height: 500px;">
						<div class="row">
							<div class="col-md-6">
								<br><br><img src="assets/images/friend1.png" class="picture-size">
							</div>
							<div class="col-md-6"><p>リンク1の内容です。</p>
								<p><a class="modal-close">閉じる</a></p>
							</div>
						</div>
					</div>

					<div id="con6" class="modal-content" style="width: 800px; height: 500px;">
						<div class="row">
							<div class="col-md-8">
								<br><br><img src="assets/images/friend1.png" class="picture-size">
							</div>
							<div class="col-md-4"><p>リンク1の内容です。</p>
								<p><a class="modal-close">閉じる</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- ほしいもの -->
		<div class="row row-bottom-padded-md " id="want-picture">
			<div class="col-md-12">
				<br>
				<h1 class="text-center">ほしいもの</h1>

				<div class="row">
					<div class="col-xs-4 ">
						<a data-target="con7" class="modal-open"><img src="assets/images/gallery-1.jpg" class="picture-size"></a>

					</div>

					<div class="col-xs-4">
						<a data-target="con8" class="modal-open"><img src="assets/images/friend1.png" class="picture-size"></a>
					</div>

					<div class="col-xs-4">
						<a data-target="con9" class="modal-open"><img src="assets/images/friend1.png" class="picture-size"></a>
					</div>


					<!-- モーダル -->
					<div id="con7" class="modal-content" style="width: 800px; height: 500px;">
						<div class="row">
							<div class="col-md-6">
								<br><br><img src="assets/images/gallery-1.jpg" class="picture-size">
							</div>
							<div class="col-md-6">
								<ul>
									<li>商品名</li>
									<li>値段</li>
									<li>ひとこと</li>
								</ul>
								<p>リンク1の内容です。</p>
								<p><a class="modal-close">閉じる</a></p>
							</div>
						</div>
					</div>

					<div id="con8" class="modal-content" style="width: 800px; height: 500px;">
						<div class="row">
							<div class="col-md-6">
								<br><br><img src="assets/images/friend1.png" class="picture-size">
							</div>
							<div class="col-md-6"><p>リンク1の内容です。</p>
								<p><a class="modal-close">閉じる</a></p>
							</div>
						</div>
					</div>

					<div id="con9" class="modal-content" style="width: 800px; height: 500px;">
						<div class="row">
							<div class="col-md-6">
								<br><br><img src="assets/images/friend1.png" class="picture-size">
							</div>
							<div class="col-md-6"><p>リンク1の内容です。</p>
								<p><a class="modal-close">閉じる</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

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
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
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
	<!-- 	自分で作ったやつ -->
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

