<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- <title>B - Shop</title> -->
	<title>BrightWorld</title>
	<meta charset="UTF-8">
	<meta name="description" content=" BrightWorld | eCommerce Template">
	<meta name="keywords" content="BrightWorld, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="/Views/Layouts/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="/Views/Layouts/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="/Views/Layouts/css/flaticon.css"/>
	<link rel="stylesheet" href="/Views/Layouts/css/slicknav.min.css"/>
	<link rel="stylesheet" href="/Views/Layouts/css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="/Views/Layouts/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="/Views/Layouts/css/animate.css"/>
	<link rel="stylesheet" href="/Views/Layouts/css/style.css"/>


	<!-- [if lt IE 9]> -->
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<!-- <![endif] -->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="/" class="site-logo">
							<!-- <img src="/Views/Layouts/img/your-logo.png" alt="Logo"> -->
							<img src="/Views/Layouts/img/a.png" alt="Logo">
						</a>
					</div>
					<div class="col-xl-8">
						<form class="header-search-form" method="post" action="">
							<input type="text" name="search" placeholder="Tìm kiếm ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-lg-2">
						<div class="user-panel text-lg-right">
							<!-- <div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="#">Đăng nhập</a> hoặc <a href="#">Tạo tài khoản</a>
							</div> -->
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span>
									<?php if(isset($_SESSION['cart'])) {
											$cartCount = count($_SESSION['cart']) - $_SESSION['cart']['all'];
											echo $cartCount;

										} else {
											echo '0';
										} 
									?>
									</span>
								</div>
								<a href="/Leds/cart/all/0">Giỏ Hàng</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="/">Trang Chủ</a></li>
                    <li><a href="/Leds/categori/all">Shop</a></li>
					<li>
                        <a href="#">Sản Phẩm Mới
                            <span class="new">Mới</span>
                        </a>
                    </li>
                    <li><a href="#">Giới Thiệu</a></li>
					<li><a href="/Leds/contact">Liên Hệ</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->



    <?php
        echo $content_for_layout;
    ?>


	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="/">
					<!-- <img style="width: fit-content;" src="/Views/Layouts/img/your-logo-f.png" alt="Logo"> -->
					<img style="width: fit-content;" src="/Views/Layouts/img/a-f.png" alt="Logo">
				</a>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Thông Tin</h2>
						<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
						<img src="/Views/Layouts/img/cards.png" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Danh Mục</h2>
						<ul>
							<li><a href="">About Us</a></li>
							<li><a href="">Track Orders</a></li>
							<li><a href="">Returns</a></li>
							<li><a href="">Jobs</a></li>
							<li><a href="">Shipping</a></li>
							<li><a href="">Blog</a></li>
						</ul>
						<ul>
							<li><a href="">Partners</a></li>
							<li><a href="">Bloggers</a></li>
							<li><a href="">Support</a></li>
							<li><a href="">Terms of Use</a></li>
							<li><a href="">Press</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Sản Phẩm</h2>
						<div class="fw-latest-post-widget">
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="/Views/Layouts/img/blog-thumbs/1.jpg"></div>
								<div class="lp-content">
									<h6>what shoes to wear</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="/Views/Layouts/img/blog-thumbs/2.jpg"></div>
								<div class="lp-content">
									<h6>trends this year</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>Địa Chỉ</h2>
						<div class="con-info">
							<span>1.</span>
							<p>Hà Nội </p>
						</div>
						<div class="con-info">
							<span>2.</span>
							<p>54 Lê Thanh Nghị </p>
						</div>
						<div class="con-info">
							<span>3.</span>
							<p>+123 4567890</p>
						</div>
						<div class="con-info">
							<span>4.</span>
							<p>thebac9910@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> I Love You <i class="fa fa-heart-o" aria-hidden="true"></i> <a href="https://www.facebook.com/nguyen.thebac.ntb/" target="_blank">Bacnt</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</div>
		</div>
	</section>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="/Views/Layouts/js/jquery-3.2.1.min.js"></script>
	<script src="/Views/Layouts/js/bootstrap.min.js"></script>
	<script src="/Views/Layouts/js/jquery.slicknav.min.js"></script>
	<script src="/Views/Layouts/js/owl.carousel.min.js"></script>
	<script src="/Views/Layouts/js/jquery.nicescroll.min.js"></script>
	<script src="/Views/Layouts/js/jquery.zoom.min.js"></script>
	<script src="/Views/Layouts/js/jquery-ui.min.js"></script>
	<script src="/Views/Layouts/js/main.js"></script>

	<script>
		function cart() {
			console.log('a');
			var quantity = $('#quantity').val();
			$('#btn-cart').attr("href", "/Leds/cart/<?php echo $led['id'];?>/" + quantity);
		}

	</script>

	</body>
</html>
