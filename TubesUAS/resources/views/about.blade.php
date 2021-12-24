<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vacaytour - About</title>
	<!--
Holiday Template
http://www.templatemo.com/tm-475-holiday
-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="css/flexslider.css" rel="stylesheet">
	<link href="css/templatemo-style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="tm-gray-bg">
	<!-- Header -->
	<div class="tm-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
					<a href="/about" class="tm-site-name">VACAYTOUR</a>
				</div>
				<div class="col-lg-6 col-md-8 col-sm-9">
					<div class="mobile-menu-icon">
						<i class="fa fa-bars"></i>
					</div>
					<nav class="tm-nav">
						<ul>
							<li><a href="home">Home</a></li>
							<li><a href="about" class="active">About</a></li>
							<li><a href="book">Booking</a></li>
							<li><a href="contact">Contact</a></li>
							@guest
							<li class="nav-item">
								<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
							</li>
							@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
							@endif
							@else
							<li class="nav-item">
								<a id="nav-link">
									{{ Auth::user()->name }}
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>
							</li>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
							@endguest
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<!-- Banner -->
	<section class="tm-banner">
		<!-- Flexslider -->
		<div class="flexslider flexslider-banner">
			<ul class="slides">
				<li>
					<div class="tm-banner-inner">
						<h1 class="tm-banner-title"><span class="tm-yellow-text">Paket</span> Wisata</h1>
						<p class="tm-banner-subtitle">Untuk Perjalanan Anda</p>
						<!-- <a href="#more" class="tm-banner-link">Learn More</a>	 -->
					</div>
					<img src="img/banner-3.jpg" />
				</li>
				<li>
					<div class="tm-banner-inner">
						<h1 class="tm-banner-title">Berbagai <span class="tm-yellow-text">Macam</span> Destinasi</h1>
						<p class="tm-banner-subtitle">Destinasi yang luar biasa</p>
						<!-- <a href="#more" class="tm-banner-link">Learn More</a>	 -->
					</div>
					<img src="img/banner-2.jpg" />
				</li>
				<li>
					<div class="tm-banner-inner">
						<h1 class="tm-banner-title"><span class="tm-yellow-text">Online</span> Booking</h1>
						<p class="tm-banner-subtitle">Kemudahan dalam proses booking</p>
						<!-- <a href="#more" class="tm-banner-link">Learn More</a>	 -->
					</div>
					<img src="img/banner-1.jpg" />
				</li>
			</ul>
		</div>
	</section>

	<!-- gray bg -->
	<section class="container tm-home-section-1" id="more">
		<div class="row">
			<!-- slider -->
			<div class="flexslider flexslider-about effect2">
				<ul class="slides">
					<li>
						<img src="img/about-1.jpg" alt="image" />
						<div class="flex-caption">
							<h2 class="slider-title">Welcome To Vacay Tour</h2>
							<h3 class="slider-subtitle">Vacay Tour adalah sebuah perusahaan penyedia paket pejalanan khususnya destinasi wisata yang berada di negara Indonesia</h3>
							<p class="slider-description">Perusahaan kami bergerak dibidang jasa yang mana mengutamakan kepuasan customer dalam menggunakan jasa kami , kami akan memberikan pelayan terbaik kami dengan harga yang sesuai dengan kebutuhan customer. Jika terdapat kritik dan saran, silahkan <a href="/contact" target="_parent">hubungi kami</a>. <br><br>
								Perusahaan kami juga menyediakan banyak paket yang dapat disesuaikan dengan kebutuhan anda.</p>
							<div class="slider-social">
								<a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
								<a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
								<a href="#" class="tm-social-icon"><i class="fa fa-pinterest"></i></a>
								<a href="#" class="tm-social-icon"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</li>
					<li>
						<img src="img/about-1.jpg" alt="image" />
						<div class="flex-caption">
							<h2 class="slider-title">Terimakasih telah memilih kami!</h2>
							<h3 class="slider-subtitle">Kami akan selalu menjaga kepercayaan customer yang telah diberikan.</h3>
							<p class="slider-description">Jangan ragu untuk memilih vacytour, karena sudah banyak yang membuktikan jika kami sangat profesional.<br><br>
								Kami selalu berusaha meningkatkan pelayaran kami baik didalam lapangan maupun diluar lapangan secara berkala, agar kedepannya kami bisa lebih dipercaya untuk mengembangkan banyak program perjalanan lainnya dan memperluas skala perjalanan.</p>
							<div class="slider-social">
								<a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
								<a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
								<a href="#" class="tm-social-icon"><i class="fa fa-pinterest"></i></a>
								<a href="#" class="tm-social-icon"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</li>
					<li>
						<img src="img/about-1.jpg" alt="image" />
						<div class="flex-caption">
							<h2 class="slider-title">Coming Soon Programs</h2>
							<h3 class="slider-subtitle">Memperluas skala perjalanan hingga ke Luar Negeri dan menyediakan program pelayanan lainnya.</h3>
							<p class="slider-description">Kami selalu berusaha meningkatkan pelayaran kami baik didalam lapangan maupun diluar lapangan secara berkala, agar kedepannya kami bisa lebih dipercaya untuk mengembangkan banyak program perjalanan lainnya dan memperluas skala perjalanan.</p>
							<div class="slider-social">
								<a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
								<a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
								<a href="#" class="tm-social-icon"><i class="fa fa-pinterest"></i></a>
								<a href="#" class="tm-social-icon"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<div class="section-margin-top about-section">
			<div class="row">
				<div class="tm-section-header">
					<div class="col-lg-3 col-md-3 col-sm-3">
						<hr>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<h2 class="tm-section-title">Siapa Kita</h2>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
						<hr>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tm-about-box-1">
						<a href="#"><img src="img/about-4.jpg" alt="img" class="tm-about-box-1-img"></a>
						<h3 class="tm-about-box-1-title">Annastasya <span>( Founder )</span></h3>
						<p class="margin-bottom-15 gray-text">Jangan mengeluhkan permohonanmu yg belum terkabul, tetapi bersyukurlah atas apa yangg kau dapatkan tanpa kau harus memintanya.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tm-about-box-1">
						<a href="#"><img src="img/about-5.jpg" alt="img" class="tm-about-box-1-img"></a>
						<h3 class="tm-about-box-1-title">Nia <span>( Co-Founder )</span></h3>
						<p class="margin-bottom-15 gray-text">Selalu ada harapan bagi mereka yang sering berdoa dan selalu ada jalan bagi mereka yang gemar berusaha.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tm-about-box-1">
						<a href="#"><img src="img/about-6.jpg" alt="img" class="tm-about-box-1-img"></a>
						<h3 class="tm-about-box-1-title">Ivory <span>( General Manager )</span></h3>
						<p class="margin-bottom-15 gray-text">Hari ini kamu melakukan apa yang tidak dilakukan orang lain. Maka besok kamu akan dapat melakukan hal yang tidak dapat dilakukan orang lain.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tm-about-box-1">
						<a href="#"><img src="img/about-7.jpg" alt="img" class="tm-about-box-1-img"></a>
						<h3 class="tm-about-box-1-title">Amellya <span>( Manager )</span></h3>
						<p class="margin-bottom-15 gray-text">Janganlah kegagalan kemarin kamu jadikan beban di hari ini. Tuhan bukan sedang menghukummu, Dia hanya mengarahkan kejalan yang lebih baik lagi.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- white bg -->
	<section class="tm-white-bg section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3">
						<hr>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<h2 class="tm-section-title">Testimonials</h2>
					</div>
					<div class="col-lg-4 col-md-3 col-sm-3">
						<hr>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Testimonial -->
				<div class="col-lg-12">
					<div class="tm-what-we-do-right">
						<div class="tm-about-box-2 margin-bottom-30">
							<img src="img/about-2.jpg" alt="image" class="tm-about-box-2-img">
							<div class="tm-about-box-2-text">
								<h3 class="tm-about-box-2-title">Perjalanan Yang Tidak Akan Terlupakan</h3>
								<p class="tm-about-box-2-description gray-text">Perjalanan yang luar biasa dengan destinasi tempat wisata yang sangat indah, tidak akan terlupakan walau perjalanan telah usai.</p>
								<p class="tm-about-box-2-footer">Annastasya Putri</p>
							</div>
						</div>
						<div class="tm-about-box-2">
							<img src="img/about-3.jpg" alt="image" class="tm-about-box-2-img">
							<div class="tm-about-box-2-text">
								<h3 class="tm-about-box-2-title">Berwisata Sesuai Kantong Anda</h3>
								<p class="tm-about-box-2-description gray-text">Paket perjalanan dengan harga yang terjangkau dan dapat Anda sesuaikan dengan kantong Anda. Dengan harga yang terjangkau, ini merupakan perjalanan yang luar biasa, sangat profesional, dan lancar terencana.</p>
								<p class="tm-about-box-2-footer">Nia Amellya</p>
							</div>
						</div>
					</div>
					<div class="tm-testimonials-box">
						<h3 class="tm-testimonials-title">Terbaru</h3>
						<div class="tm-testimonials-content">
							<div class="tm-testimonial">
								<p>"Perjalanan yang luar biasa. Fotonya keren dan harga menurut saya paling bersahabat. Jangan ragu pilih vacaytour"</p>
								<strong class="text-uppercase">John Smith</strong>
							</div>
							<div class="tm-testimonial">
								<p>"Adminnya ramah-ramah, dari awal nanya-nanya direspon dengan baik."</p>
								<strong class="text-uppercase">Lorens</strong>
							</div>
							<div class="tm-testimonial">
								<p>"Perencanaan perjalanan yang mengesankan dan sangat profesional."
								<p>
									<strong class="text-uppercase">Robert</strong>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">Copyright &copy; 2020 VacayTour Group</p>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script> <!-- jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script> <!-- bootstrap js -->
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script> <!-- flexslider js -->
	<script type="text/javascript" src="js/templatemo-script.js"></script> <!-- Templatemo Script -->
	<script>
		$(function() {

			// https://css-tricks.com/snippets/jquery/smooth-scrolling/
			$('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
					if (target.length) {
						$('html,body').animate({
							scrollTop: target.offset().top
						}, 1000);
						return false;
					}
				}
			});
		});
		$(window).load(function() {
			// Flexsliders
			$('.flexslider.flexslider-banner').flexslider({
				controlNav: false
			});
			$('.flexslider').flexslider({
				animation: "slide",
				directionNav: false,
				slideshow: false
			});
		});
	</script>
</body>

</html>